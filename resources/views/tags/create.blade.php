@extends('layouts.app')
{{-- Title --}}
@section('title')
    {{__("Create New Tags")}}
@endsection

@section('styles')
@endsection

@section('header_content')
    {{__('Create New tags')}}
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">eBlog</a></li>
            <li class="breadcrumb-item"><a href="{{route('tags.index')}}">Tags</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create new Tags</li>
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
                <form method="POST" action="{{route('tag.store')}}">
                    @csrf

                    <!-- tag -->
                    <div class="form-group">
                        <label for="tag">Tags</label>
                        <input type="text" class="form-control" id="tag" name="tag" placeholder="Name">
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
