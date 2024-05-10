@extends('layout')

@section('content-wrapper')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h3 class="font-weight-bold">Add New User</h3>
                            </div>
                            <a href="/users">&#8592; Back</a>
                        </div>
                        <h6 class="font-weight-normal mb-0">Fill all the required fields. <span style="color: red;">*</span></h6>
                    </div>
                    
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        
                        <form action="{{ route('users.store') }}" method="POST" class="forms-sample">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="contact_no">Contact No. <span style="color: red;">*</span></label>
                                <input type="number" class="form-control" id="contact_no" name="contact_no" placeholder="Contact No." required>
                            </div>
                            <div class="form-group">
                                <label for="user_type">User Type <span style="color: red;">*</span></label>
                                <select class="form-control" id="user_type" name="user_type" required>
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address <span style="color: red;">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="mdi mdi-eye-off" style="color: #6c757d;" id="togglePassword"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#togglePassword').click(function() {
                const passwordInput = $('#password');
                const type = passwordInput.attr('type') === 'password' ? 'text' : 'password';
                passwordInput.attr('type', type);
                $(this).toggleClass('mdi-eye mdi-eye-off');
            });
        });
    </script>
@endsection