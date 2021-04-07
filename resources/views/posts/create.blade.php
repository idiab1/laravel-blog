@extends('layouts.app')
{{-- Title --}}
@section('title')
    {{__("Create New Post")}}
@endsection

@section('styles')
@endsection

@section('header_content')
    {{__('Create New Post')}}
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">eBlog</a></li>
            <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create new post</li>
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
                <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                    @csrf

                    <!-- title -->
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>

                    <!-- Content -->
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="3" placeholder="Content"></textarea>
                    </div>
                    <!-- Photo -->
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
