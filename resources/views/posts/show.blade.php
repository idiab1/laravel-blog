@extends('layouts.app')
{{-- Title --}}
@section('title')
    {{$post->title}}
@endsection

@section('styles')
@endsection

@section('header_content')
    {{$post->title}}
@endsection

@section('breadcrumb')
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">eBlog</a></li>
            <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Show</li>
        </ol>
    </div>
@endsection


@section('content')
<div class="section-posts">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card post-card">
                <div class="card header post-header">
                    <ul class="list-unstyled">
                        <li>
                            <h3 class="card-title post-title">{{$post->title}}</h3>
                            <i class="fas fa-arrow-right"></i>
                        </li>
                        <li>
                            <h5 class="card-title post-title">{{$post->user->name}}</h5>
                        </li>

                        <span class="post-date">{{$post->created_at->diffForhumans()}}</span>
                    </ul>
                    {{-- <ul class="post-action">
                        <li>Edit</li>
                        <li>Delete</li>
                        <li>Cancel</li>
                    </ul> --}}
                </div>
                <div class="card-body post-body">
                    <img src="{{URL::asset($post->photo)}}" alt="">

                    <p class="card-text post-description">{{$post->content}}</p>
                </div>
                <div class="card-footer post-footer">
                    <ul class="list-unstyled">
                        <li>#tag</li>
                        <li>#tag</li>
                        <li>#tag</li>
                        <li>#tag</li>
                    </ul>
                </div>
            </div>
        </div>

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
