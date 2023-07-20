@extends("layouts.dashboard.app")
@section("title")
    Sign Up
@endsection
@section("content")
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Enter Signup Information</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Muzammil" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="muzammil@gmail.com" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control"  value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mx-3" href="{{ route('signin') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round text-dark">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
