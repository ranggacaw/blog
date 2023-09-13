<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\TagPost;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = TagPost::all();
        return view('tag.index',compact('tags'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title_name' => 'required',
            'content' => 'required',
            'tags' => 'required',
        ]);

        $input = $request->all();

        $tags = explode(",", $request->tags);

        $post = TagPost::create($input);

        $post->tag($tags);

        return back()->with('success','Tags added to database.');
    }
}
