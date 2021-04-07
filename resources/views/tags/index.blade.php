@extends('layouts.app')
{{-- Title --}}
@section('title')
    {{__("All Tags")}}
@endsection

@section('styles')
@endsection

@section('header_content')
    {{__('All Tags')}}
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">eBlog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tags</li>
        </ol>
    </div>
@endsection

@section('content')
<div class="section-posts">
    <div class="row">
        @if ($tags->count() > 0)
            <div class="col-md">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tag</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id = 1
                            @endphp
                            @foreach ($tags as $tag)
                                <tr>
                                    <th scope="row">{{$id++}}</th>
                                    <td>{{$tag->tag}}</td>
                                    <td>
                                        <a class="text-primary px-2" href="{{route('tag.edit', ['tag' => $tag->id])}}"> <i class="fas fa-edit"></i></a>
                                        <form action="{{route('tag.destroy', ['tag' => $tag->id])}}" method="POST">
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
                    There are no tags yet
                </div>
            </div>
        @endif

        

        
    </div>
</div>
@endsection
