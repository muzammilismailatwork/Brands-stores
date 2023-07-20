@extends("layouts.dashboard.app")
@section("title")
    Sign In
@endsection
@section("content")
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Please Enter Your Email Address</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="muzammil@gmail.com" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round text-dark">Reset Link</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
