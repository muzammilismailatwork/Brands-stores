@extends("layouts.dashboard.app")
@section("title")
    Update Brand
@endsection
@section("content")
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Enter Brand Information</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route("update_brand",[$brand->id])}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Brand Name</label>
                                        <input type="text" name="name" value="{{$brand->name}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" name="website" value="{{$brand->website}}" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Brand Status</label>
                                            <select name="status" class="form-control">
                                                <option value="Disabled">Select Brand Status</option>
                                                <option value="{{ config('status.status_options.Active') }}" @if($brand->status === "Active") selected @endif >Active</option>
                                                <option value="{{ config('status.status_options.Inactive') }}" @if($brand->status === "Inactive") selected @endif >Inactive</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round text-dark">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
