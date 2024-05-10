@extends('layout')

@section('content-wrapper')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Driver Records</h3>
                        <h6 class="font-weight-normal mb-0">All registered drivers will be listed here.</h6>
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
                                <a class="btn btn-success" href="">Add New Driver</a>
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
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact No.</th>
                                                <th>License No.</th>
                                                <th>License Exp.</th>
                                                <th>Birthday</th>
                                                <th>Created by</th>
                                                <th>Status</th>
                                                <th>Updated at</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td>Ejaxx</td>
                                            <td>Brgy. 6, Balingasag, Misamis Oriental</td>
                                            <td>09812323232</td>
                                            <td>09812323232</td>
                                            <td>May 11, 2024</td>
                                            <td>May 11, 2024</td>
                                            <td>User 1</td>
                                            <td>
                                                <div class="badge badge-primary">Active</div>
                                            </td>
                                            <td>May 11, 2024</td>
                                            <td>
                                                <a href="" title="View" style="color: green;">
                                                    <i class="ti-eye btn-icon-prepend"></i> View
                                                </a>
                                                <a href="" title="Edit">
                                                    <i class="ti-pencil btn-icon-prepend"></i> Edit
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
