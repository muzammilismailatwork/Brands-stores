@extends("layouts.dashboard.app")
@section("title")
    Manage Stores
@endsection
@section("content")
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Stores List</h4>
                    </div>
                    <form method="GET", action="{{route("create_store")}}">
                    <div class="d-flex justify-content-end mx-5">
                        <button class="btn bg-primary text-dark">Create Store</button>
                    </div>
                    </form>
                    <div class="col-md-4">
                        <form method="GET" action="{{route("stores")}}">
                            <div class="ml-2 mx-3">
                                <div class="form-group d-flex">
                                    <select name="sort" class="form-control mt-2 mb-2"   >
                                        <option value="Disabled">Sorting</option>
                                        <option value="latest">Latest</option>
                                        <option value="random">Random</option>
                                        <option value="oldest">Oldest</option>
                                    </select>
                                    <button class="btn bg-primary text-dark mx-1" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    id
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Address
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Brand ID
                                </th>
                                <th>
                                    Action
                                </th>
                                </thead>
                                <tbody>
                                @foreach($stores as $store)
                                <tr>
                                    <td>
                                        {{$store->id}}
                                    </td>
                                    <td>
                                        {{$store->name}}
                                    </td>
                                    <td>
                                        {{$store->address}}
                                    </td>
                                    <td>
                                        @if($store->status == "Active")
                                            <button class="btn btn-success">{{$store->status}}</button>
                                        @else($store->status == "Inactive")
                                            <button class="btn btn-danger">{{$store->status}}</button>
                                        @endif
                                    </td>
                                    <td>
                                        {{$store->brand->id}}
                                    </td>
                                    <td>
                                        <form action="{{route("edit_store", [$store->id])}}" method="get" style="display: inline">
                                            @csrf
                                            <button type="submit"><i class="fas fa-edit"></i></button>
                                        </form>
                                        <form action="{{route("delete_store",[$store->id])}}" method="post" style="display: inline">
                                            @csrf
                                            <input type="hidden" value="{{$store->id}}">
                                            <button class="mx-2" type="submit"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
