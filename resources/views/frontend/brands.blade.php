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
                    <div class="d-flex justify-content-end mx-5">
                        <a href="{{route("create_brand")}}" class="btn bg-primary text-dark">Create Brand</a>
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
