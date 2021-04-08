<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
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
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        if ($tags->count() == 0) {
            return   redirect()->route('tag.create');
        }
        return view('posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'photo' => 'required|image',
            'tags' => 'required',
        ]);

        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/posts',$newPhoto);

        $post = Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'content' => $request->content,
            'photo' => 'uploads/posts/'.$newPhoto,
            'slug' => Str::slug($request->title),
        ]);
        $post->tag()->attach($request->tag);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tags = Tag::all();

        $post = Post::where('slug', $slug)->first();
        return view('posts.show', compact('post', 'tags'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::all();

        $post = Post::where('id', $id)->where('user_id', Auth::user()->id)->first();

        return view('posts.edit', compact('post', 'tags'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        if($request->has('photo')){
            $photo = $request->photo;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('uploads/posts/',$newPhoto);
            $post->photo ='uploads/posts/'.$newPhoto;
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        $post->tag()->sync($request->tags);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->where('user_id', Auth::user()->id)->first();
        $post->delete();
        return redirect()->back();
    }
    
    public function postsTrashed(){
        $posts = Post::onlyTrashed()->where('user_id', Auth::user()->id)->get();
        return view('posts.trashed', compact('posts'));
    }

    public function hdelete($id){
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        return redirect()->back();

    }
    public function restore($id){
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();
        return redirect()->back();
    }
}
