<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\TagPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::withCount('comments')->paginate(3); //cara ngitung koment, antara relasi model Blog dengan Comment
        $user = User::where('id', 1)->first();
        $tags = TagPost::all();

        return view('blog.index', compact('blogs', 'user', 'tags'));
    }

    public function details($id)
    {
        $blogs = Blog::where('id', $id)->first();
        $user = User::where('id', 1)->first();
        $comment_count = Comment::where('blog_id', $blogs->id)->count();
        $comments = Blog::where('id', $id)->first()->comments; // ngambil comment hasmany yg ada di model, jadi 1 blog berisi banyak comment
        $tags = TagPost::all();

        return view('blog.details', compact('blogs', 'user', 'comments', 'comment_count', 'tags'));
    }

    public function detailsStore(Request $request, $id)
    {
        $blogs = Blog::where('id', $id)->first();
        $user = User::where('id', Auth::user()->id)->first();
        $comments = new Comment;

        $comments->name = $request->name;
        $comments->email = $request->email;
        $comments->website = $request->website;
        $comments->comment = $request->comment;
        $comments->user_id = $user->id;
        $comments->blog_id = $blogs->id;
        $comments->save();


        Alert::success('Success', 'Comment has been Realese!');
        return redirect('blog-details/'.$blogs->id);
    }

    public function create()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('blog.create', compact('user'));
    }

    public function createStore(Request $request)
    {
        // $user = User::where('id', Auth::user()->id)->first();
        $blogs = new Blog;
        $imageName = time().'.'.$request->blogPicture->extension();  
        $request->blogPicture->move(public_path('images/blog'), $imageName);

        // data yg di request masukin ke kolom pada table
        $blogs->blogPicture = $imageName;
        $blogs->title = $request->title;

        libxml_use_internal_errors(true);

        // Save Description for Sumernote
        if (!empty($request->content )) 
        {
            $content = $request->content; // ambil dari form blade

            $dom = new \DomDocument(); // gunakan dom document untuk ngambil tag img summernote
            $dom->loadHtml( mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $images = $dom->getElementsByTagName('img'); // ambil aja semua yg tag img
            foreach($images as $img)
            {
                $src = $img->getAttribute('src'); // ambil src dari img
                if(preg_match('/data:image/', $src)){ // check data apa bentuknya data:image
                    // get the mimetype
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups); // pecah-pecah data
                    $mimetype = $groups['mime'];

                    $filename = uniqid(); // buat nama file upload
                    $filepath = "/images/blog/$filename.$mimetype"; // path folder gambar
                    // disini buat gambar lalu simpan pada folder yang diinginkan
                    $image = Image::make($src)
                        ->encode($mimetype, 100)  // encode file to the specified mimetype
                        ->save(public_path($filepath));

                    $new_src = asset($filepath); // convert menjadi tag img html biasa
                    $img->removeAttribute('src'); // hapus tag img bawaan si summernote
                    $img->setAttribute('src', $new_src); // ganti dengan yang baru.
                }
            }
            $description = $dom->saveHTML();
        }
        $blogs->content = $description;
        $blogs->save();

        // data tags input di masukan ke dalam database TagPost
        $input = $request->all();
        $tags = explode(",", $request->tags);
        $post = TagPost::create($input);
        $post->title = $request->title;
        $post->content = $description;
        $post->tag($tags);
        
        Alert::success('Success', 'New blog has been Realese!');
        return redirect('blog-create');
    }
}
