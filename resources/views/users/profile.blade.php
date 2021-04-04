@extends('layouts.app')

@section('title')
    {{__("Profile")}}
@endsection

@section('content')
<div class="profile-content">
    <div class="row">
        <div class="col-md">
            <div class="profile-container">
                <form>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <!-- Gender -->
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
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