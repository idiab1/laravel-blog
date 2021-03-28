@extends('layouts.app')

@section('title')
    {{__("Home")}}
@endsection

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="row my-4">
            <div class="col-md-4">
                <div class="card post-card">

                    <div class="card-body post-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card post-card">


                    <div class="card-body post-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card post-card">


                    <div class="card-body post-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-4">
                <div class="card post-card">


                    <div class="card-body post-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card post-card">


                    <div class="card-body post-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card post-card">


                    <div class="card-body post-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 my-4 sidebar">
        <h4 class="posts-sidebar">Heading</h4>
        <div class="search-form">
            <form action="" method="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Find your post">
                    <button type="submit" class="">Find</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
