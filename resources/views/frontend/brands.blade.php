@extends("layouts.dashboard.app")
@section("title")
    Brands
@endsection
@section("content")
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Brands List</h4>
                    </div>
                    <div class="col-md-4">
                    <form method="GET" action="{{route("brands")}}">
                    <div class="ml-2 mx-3">
                        <div class="form-group d-flex">
                            <select name="sort" class="form-control mt-2 mb-2">
                                <option value="Disabled">Sorting</option>1
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
                                    Website
                                </th>
                                <th>
                                    Creation Date
                                </th>
                                <th>
                                    Status
                                </th>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                <tr>
                                    <td>
                                        {{$brand->id}}
                                    </td>
                                    <td>
                                        {{$brand->name}}
                                    </td>
                                    <td>
                                        {{$brand->website}}
                                    </td>
                                    <td>
                                        {{$brand->created_at}}
                                    </td>
                                    <td>
                                        @if($brand->status == "Active")
                                            <button class="btn btn-success">{{$brand->status}}</button>
                                        @else($brand->status == "Inactive")
                                            <button class="btn btn-danger">{{$brand->status}}</button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <div class="custom-pagination">
                                <ul class="pagination">
                                    {{$brands->links('pagination::bootstrap-4')}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
