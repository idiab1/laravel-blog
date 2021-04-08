@extends('layouts.app')
{{-- Title --}}
@section('title')
    {{__("Edit Post")}}
@endsection

@section('styles')
@endsection


@section('header_content')
    {{__('Edit Post')}}
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">eBlog</a></li>
            <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </div>
@endsection

@section('content')
@if (count($errors) > 0)
    @foreach ($errors->all() as $item)
        <div class="alert alert-danger" role="alert">{{$item}}</div>
    @endforeach
@endif

<div class="section-posts">

    <div class="row">
        <div class="col-md">
            <div class="posts-form-container">
                <form method="POST" action="{{route('post.update', ['post' => $post->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- title -->
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$post->title}}">
                    </div>

                    <!-- Content -->
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="3" placeholder="Content">{{$post->content}}</textarea>
                    </div>
                    <!-- Photo -->
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo">
                    </div>
                    <!-- Tags -->
                    <div class="form-group">
                        @foreach ($tags as $tag)
                            <input type="checkbox"  id="tag" name="tag[]" 
                            value="{{$tag->id}}"
                             @foreach ($post->tag as $item2)
                                @if ($tag->id == $item2->id)
                                    checked
                                @endif
                            @endforeach
                            >
                            <label for="tag">{{$tag->tag}}</label> 
                            

                        @endforeach
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
