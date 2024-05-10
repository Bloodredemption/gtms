@extends('layout')

@section('content-wrapper')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">User Records</h3>
                        <h6 class="font-weight-normal mb-0">All registered users will be listed here.</h6>
                    </div>
                    
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mb-3">
                                <a class="btn btn-success" href="{{ route('users.create') }}">Add New User</a>
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
                                                <th>Email</th>
                                                <th>Contact No.</th>
                                                <th>Status</th>
                                                <th>Updated at</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="noDataFoundRow" style="display: none;">
                                                <td colspan="6">No data found</td>
                                            </tr>
                                            @foreach($users as $user)
                                            <tr>
                                                <td>
                                                    <b>{{ $user->name }}</b>
                                                    <p class="card-description">
                                                    {{ $user->user_type }}
                                                    </p>
                                                </td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->contact_no }}</td>
                                                <td>
                                                    @if($user->status == '1')
                                                    <div class="badge badge-primary">Active</div>
                                                    @elseif($user->status == '0')
                                                    <div class="badge badge-danger">Inactive</div>
                                                    @endif
                                                </td>
                                                    <td>{{ $user->updated_at->format('F j, Y | h:i A') }}</td>
                                                <td>
                                                    <a href="{{ route('users.show', $user->id) }}" title="View" style="color: green;">
                                                        <i class="ti-eye btn-icon-prepend"></i> View
                                                    </a>
                                                    <a href="{{ route('users.edit',$user->id) }}" title="Edit">
                                                        <i class="ti-pencil btn-icon-prepend"></i> Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#filterButton').on('click', function() {
                var filterValue = $('#userFilter').val().toLowerCase();
                var rows = $('#example tbody tr');
                var noDataFoundRow = $('#noDataFoundRow');
    
                rows.hide(); // Hide all rows initially
    
                rows.filter(function() {
                    return $(this).text().toLowerCase().indexOf(filterValue) > -1;
                }).show();
    
                if ($('#example tbody tr:visible').length === 0) {
                    noDataFoundRow.show(); // Show "No data found" row if no rows match filter
                } else {
                    noDataFoundRow.hide(); // Hide "No data found" row if there are matching rows
                }
    
                $('#clearButtonWrapper').show(); // Show the clear button wrapper
            });
    
            $('#clearButton').on('click', function() {
                $('#userFilter').val(''); // Clear the filter input
                $('#example tbody tr').show(); // Show all table rows
                $('#noDataFoundRow').hide(); // Hide "No data found" row
                $('#clearButtonWrapper').hide(); // Hide the clear button wrapper
            });
    
            // Show or hide clear button based on filter input value
            $('#userFilter').on('input', function() {
                var filterValue = $(this).val();
                if (filterValue.trim() !== '') {
                    $('#clearButtonWrapper').show();
                } else {
                    $('#clearButtonWrapper').hide();
                }
            });
        });
    </script>
@endsection
