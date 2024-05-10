@extends('layout')

@section('content-wrapper')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Routes</h3>
                        <h6 class="font-weight-normal mb-0">All Routes will be listed here.</h6>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mb-3">
                                <a class="btn btn-success" href="">Add New Route</a>
                            </div>
                            <div class="col-auto mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="userFilter" placeholder="Search by name, email, and contact number.">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="button" id="filterButton"><i class="ti-search btn-icon-prepend"></i></button>
                                    </div>
                                    <div class="input-group-append" style="display: none;" id="clearButtonWrapper">
                                        <button class="btn btn-outline-danger" type="button" id="clearButton">
                                            <i class="mdi mdi-close"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="example" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Starting Point</th>
                                                <th>End Point</th>
                                                <th>Created at</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td>Point 1</td>
                                            <td>Point 2</td>
                                            <td>May 11, 2024</td>
                                            <td>
                                                <a href="{{ route('admin.routes.view') }}" title="View" style="color: green;">
                                                    <i class="ti-eye btn-icon-prepend"></i> View
                                                </a>
                                            </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
