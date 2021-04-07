@extends('layouts.app')
{{-- Title --}}
@section('title')
    {{__("Profile")}}
@endsection

@section('styles')
@endsection

@section('header_content')
    {{__('Profile')}}
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">eBlog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </div>
@endsection


@section('content')
@php
    $genderArray = ['Male', 'Female']
@endphp
@if (count($errors) > 0)
    @foreach ($errors->all() as $item)
        <div class="alert alert-danger" role="alert">{{$item}}</div>
    @endforeach
@endif

<div class="profile-setting">
    <div class="row">
        <div class="col-12">
            <div class="profile-container">
                <div class="row">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
