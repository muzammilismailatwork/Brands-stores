@extends("layouts.dashboard.app")
@section("title")
    Stores
@endsection
@section("content")
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Stores List</h4>
                    </div>
                    <div class="d-flex justify-content-end mx-5">
                        <a href="{{route("create_store")}}" class="btn bg-primary text-dark">Create Store</a>
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
                                    Edit
                                </th>
                                <th>
                                    Delete
                                </th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Niger
                                    </td>
                                    <td>
                                        Oud-Turnhout
                                    </td>
                                    <td>
                                        $36,738
                                    </td>
                                    <td>
                                        $36,738
                                    </td>
                                    <td>
                                        <i class="fas fa-edit"></i>
                                    </td>
                                    <td>
                                        <i class="fas fa-trash-alt"></i>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
