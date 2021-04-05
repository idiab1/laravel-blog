<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $id = Auth::id();
        
        if($user->profile == null){
            $profile = Profile::create([
                'gender' => 'Male',
                'address' => 'Egypt',
                'facebook_url'=> 'https://www.facebook.com/islam',
                'linkedin_url'=> 'https://www.linkedin.com/islam',
                'user_id'=> Auth::user()->id,
                'bio' => 'Hello World!'
            ]);

            // $profile->address = $request->address;
            // $profile->bio = $request->bio;
            // $profile->facebook_url = 'https://www.linkedin.com/username';
            // $profile->linkedin_url = $request->linkedin_url;
            // $profile->user_id = Auth::user()->id;
            // $profile->save();
        }
        return view('users.profile', compact('user'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Validation on data coming from user
        $request->validate([
            'name'              => 'required|min:4|max:20',
            'email'             => 'required|min:4|max:45',
            // 'password'          => 'required|min:8|confirmed',
            'gender'            => 'nullable',
            'address'           => 'nullable',
            'bio'               => 'nullable',
            'facebook_url'      => 'nullable',
            'linkedin_url'      => 'nullable',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        $user->profile->gender = $request->gender;
        $user->profile->address = $request->address;
        $user->profile->bio = $request->bio;
        $user->profile->facebook_url = $request->facebook_url;
        $user->profile->linkedin_url = $request->linkedin_url;
        $user->save();
        $user->profile->save();

        if($request->has('password')){

            $user->password = Hash::make($request->password);
            $user->save();

        }

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
