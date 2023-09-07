<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('profile.index', compact('user'));
    }

    public function edit()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('profile.edit', compact('user'));
    }

    public function editStore(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();

        if (!empty($request->profilePicture)) {
            $imageName = time().'.'.$request->profilePicture->extension();  
            $request->profilePicture->move(public_path('images/profile'), $imageName);
            
            $user->profilePicture = $imageName;
        }

        // data yg di request masukin ke kolom pada table
        $user->name = $request->name;
        $user->address = $request->address;
        $user->about = $request->about;
        $user->feeds = $request->feeds;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->update();


        Alert::info('Success', 'Profile has been Updated!');
        return redirect('profile');
    }
}
