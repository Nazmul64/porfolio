@extends('Backend.master')
@section('content')
<div class="row">
    <!-- Left Column -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <label>Admin Name Change</label>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('profile.namechanes') }}"enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Admin Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            placeholder="Enter Admin name"
                            value="{{ Auth::user()->name }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="name">Admin Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="Enter Admin Email"
                            value="{{ Auth::user()->email }}"
                        >
                    </div>
                    {{-- <div class="form-group">
                        <label>Old Photo </label><br>
                        <img width="40px" style="height: 500px;" class="card-img-top" src="{{asset('uploads/profile').'/'.Auth::user()->profile_photo}}" alt="Card image cap">
                    </div>
                    <div class="form-group">
                        <label for="name">New Photo</label>
                        <input type="file"class="form-control"id="email"name="email" placeholder="Enter Admin Email">
                    </div> --}}
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Right Column -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <label>Admin Password Change</label>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('password.chanes') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Admin Old Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="old_password"
                            name="old_password"
                            placeholder="Enter Admin Old Password"
                            value="{{ Auth::user()->old_password }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="email">Admin New Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="old_password"
                            name="password"
                            placeholder="Enter Admin Old Password"
                            value="{{ Auth::user()->old_password }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="email">Admin New Confirmation Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="password_confirm"
                            name="password_confirm"
                            placeholder="Enter Admin Old Password"
                            value="{{ Auth::user()->password_confirm }}"
                        >
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
