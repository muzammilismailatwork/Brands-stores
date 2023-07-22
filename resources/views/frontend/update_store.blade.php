@extends("layouts.dashboard.app")
@section("title")
    Update Srore
@endsection
@section("content")
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Edit Store Information</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route("update_store", [$store->id])}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Store Name</label>
                                        <input type="text" name="name" value="{{$store->name}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Store Status</label>
                                            <select name="status" class="form-control">
                                                <option value="Disabled">Select Brand Status</option>
                                                <option value="{{ config('status.status_options.Active') }}"  @if($store->status === "Active") selected @endif>Active</option>
                                                <option value="{{ config('status.status_options.Inactive') }}"  @if($store->status === "Inactive") selected @endif>Inactive</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Brand</label>
                                        <select name="brand_id" class="form-control">
                                            <option value="Disabled">Select Brand</option>
                                            @foreach($brands as $brand)
                                                <option @if($brand->id == $store->brand_id) selected @endif value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea name="address" value="{{$store->address}}" class="form-control" >{{$store->address}}</textarea>
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
