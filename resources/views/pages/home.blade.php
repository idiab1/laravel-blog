@extends('layouts.app')

@section('title')
    {{__("Home")}}
@endsection

@section('content')
<div class="main-section">
    <div class="row">
        <div class="col-12">
        <div class="main-section-info">
            <h2 class="heading">Post Popular</h2>
        </div>

        </div>
    </div>
    <div class="row">
        {{-- <div class="col-md-9">
            <div class="row">
                <div class="col-md">
                    <div class="card post-card">

                        <div class="card-body post-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="">Read More</a>
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
                <div class="col-md">
                    <div class="card post-card">

                        <div class="card-body post-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card post-card">

                        <div class="card-body post-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card post-card">

                        <div class="card-body post-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-md">
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
        </div>

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
