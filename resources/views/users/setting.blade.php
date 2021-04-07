@extends('layouts.app')
{{-- Title --}}
@section('title')
    {{__("Setting")}}
@endsection

@section('styles')
@endsection

@section('header_content')
    {{__('Setting')}}
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">eBlog</a></li>
            <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Setting</li>
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
        <div class="col-md">
            <div class="profile-container">
                <form method="POST" action="{{route('profile.update', $user->id)}}">
                    @csrf
                    @method('PUT')

                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$user->name}}">
                    </div>
                    <!-- Email address -->
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{$user->email}}">
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{$user->password}}">
                    </div>
                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="confirm password" value="{{$user->password}}">
                    </div>
                    <!-- Gender -->
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" >
                            @foreach ($genderArray as $gender)

                                <option value="{{$gender}}" {{($user->profile->gender == $gender) ? 'selected' : ''}}>{{$gender}}</option>

                                @endforeach
                        </select>
                    </div>
                    <!-- Address -->
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="address" value="{{$user->profile->address}}">
                    </div>
                    <!-- linkedin url -->
                    <div class="form-group">
                        <label for="linkedin">Linkedin</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="https://www.linkedin.com/username" value="{{$user->profile->linkedin_url}}">
                    </div>
                    <!-- Facebook url -->
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="https://www.facebook.com/username" value="{{$user->profile->facebook_url}}">
                    </div>
                    <!-- Bio of user -->
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea class="form-control" id="bio" name="bio" rows="3">{{$user->profile->bio}}</textarea>
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
