@extends('layouts.app')
{{-- Title --}}
@section('title')
    {{__("Profile")}}
@endsection

@section('styles')
@endsection

@section('header_content')
    {{__('profile')}}
@endsection


@section('content')

<div class="profile-content">
    <div class="row">
        <div class="col-md">
            <div class="profile-container">
                <form>
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <!-- Email address -->
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                    </div>
                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="confirm password">
                    </div>
                    <!-- linkedin url -->
                    <div class="form-group">
                        <label for="linkedin">Linkedin</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="name@example.com/username">
                    </div>
                    <!-- Facebook url -->
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="name@example.com/username">
                    </div>
                    <!-- Gender -->
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <!-- Bio of user -->
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
