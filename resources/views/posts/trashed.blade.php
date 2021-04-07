@extends('layouts.app')
{{-- Title --}}
@section('title')
    {{__("All Posts")}}
@endsection

@section('styles')
@endsection

@section('header_content')
    {{__('Posts Trashed')}}
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">eBlog</a></li>
            <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Posts Trashed</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="section-posts">
    <div class="row">
        @if ($posts->count() > 0)
            <div class="col-md">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Date</th>
                                <th scope="col">User</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id = 1
                            @endphp
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">{{$id++}}</th>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->created_at->diffForhumans()}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>
                                        <img class="img-tumbnail" src="{{URL::asset($post->photo)}}" alt="{{$post->photo}}" width="100" height="100"/>
                                    </td>
                                    <td>
                                        <a class="text-success" href="{{route('post.restore', ['id' => $post->id])}}"> <i class="fas fa-undo"></i></a>
                                        <form action="{{route('post.hdelete', ['id' => $post->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn text-danger" type="submit"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="col-md">
                <div class="alert alert-danger">
                    There are no Posts yet
                </div>
            </div>
        @endif

        {{-- <div class="col-md">
            <div class="row">
                <div class="col-md-4">
                    <div class="card post-card">

                        <div class="card-body post-body">
                            <h5 class="card-title post-title">Card title</h5>
                            <span class="post-date">02/4/2021</span>
                            <p class="card-text post-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link btn-read-post">Read More</a>
                        </div>
                        <div class="card-footer post-footer">
                            <ul class="list-unstyled">
                                <li>Created by: Name</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card post-card">

                        <div class="card-body post-body">
                            <h5 class="card-title post-title">Card title</h5>
                            <span class="post-date">02/4/2021</span>
                            <p class="card-text post-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link btn-read-post">Read More</a>
                        </div>
                        <div class="card-footer post-footer">
                            <ul class="list-unstyled">
                                <li>Created by: Name</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card post-card">

                        <div class="card-body post-body">
                            <h5 class="card-title post-title">Card title</h5>
                            <span class="post-date">02/4/2021</span>
                            <p class="card-text post-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link btn-read-post">Read More</a>
                        </div>
                        <div class="card-footer post-footer">
                            <ul class="list-unstyled">
                                <li>Created by: Name</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card post-card">

                        <div class="card-body post-body">
                            <h5 class="card-title post-title">Card title</h5>
                            <span class="post-date">02/4/2021</span>
                            <p class="card-text post-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link btn-read-post">Read More</a>
                        </div>
                        <div class="card-footer post-footer">
                            <ul class="list-unstyled">
                                <li>Created by: Name</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card post-card">

                        <div class="card-body post-body">
                            <h5 class="card-title post-title">Card title</h5>
                            <span class="post-date">02/4/2021</span>
                            <p class="card-text post-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link btn-read-post">Read More</a>
                        </div>
                        <div class="card-footer post-footer">
                            <ul class="list-unstyled">
                                <li>Created by: Name</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card post-card">

                        <div class="card-body post-body">
                            <h5 class="card-title post-title">Card title</h5>
                            <span class="post-date">02/4/2021</span>
                            <p class="card-text post-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link btn-read-post">Read More</a>
                        </div>
                        <div class="card-footer post-footer">
                            <ul class="list-unstyled">
                                <li>Created by: Name</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="col-md-3 sidebar-posts">
            <h4 class="posts-sidebar">Heading</h4>
            <div class="search-form">
                <form action="" method="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Find your post">
                        <button type="submit" class="btn">Find</button>
                    </div>
                </form>
            </div>
        </div> --}}
    </div>
</div> 
@endsection
