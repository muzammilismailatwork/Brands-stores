@extends("layouts.dashboard.app")
@section("title")
    Srore
@endsection
@section("content")
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Enter Store Information</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="#">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Store Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Store Status</label>
                                            <select name="status" class="form-control">
                                                <option value="Disabled">Select Brand Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Paused">Inactive</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Brand</label>
                                        <select name="status" class="form-control">
                                            <option value="Disabled">Select Brand</option>
                                            <option value="Active">Active</option>
                                            <option value="Paused">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea name="website" class="form-control" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round text-dark">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
