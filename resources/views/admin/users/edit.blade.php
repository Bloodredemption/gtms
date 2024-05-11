@extends('layout')

@section('content-wrapper')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h3 class="font-weight-bold">Edit User</h3>
                            </div>
                            <a href="/users">&#8592; Back</a>
                        </div>
                        <h6 class="font-weight-normal mb-0">Edit all the required fields. <span style="color: red;">*</span></h6>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.update',$user->id) }}" method="POST" class="forms-sample">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="contact_no">Contact No. <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span style="background-color: #ffffff;" class="input-group-text"><img src="{{ asset('images/ph-flag.jpg') }}" alt="PH Flag" style="height: 1em;"></span>
                                    </div>
                                    <input type="tel" class="form-control" id="contact_no" value="{{ $user->contact_no }}" name="contact_no" placeholder="Contact No." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user_type">User Type <span style="color: red;">*</span></label>
                                <select class="form-control" id="userType" name="user_type" required>
                                    <option value="User" {{ $user->user_type === 'User' ? 'selected' : '' }}>User</option>
                                    <option value="Admin" {{ $user->user_type === 'Admin' ? 'selected' : '' }}>Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address <span style="color: red;">*</span></label>
                                <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email" placeholder="Email" required>
                            </div>
                          <button type="submit" class="btn btn-success mr-2">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h3 class="font-weight-bold">Change Password</h3>
                            </div>
                        </div>
                        <h6 class="font-weight-normal mb-0">Edit all the required fields. <span style="color: red;">*</span></h6>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.updatePass', $user->id) }}" method="POST" class="forms-sample">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="password">New Password <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="mdi mdi-eye-off" style="color: #6c757d;" id="togglePassword"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Save Changes</button>
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
    <script>
      document.addEventListener("DOMContentLoaded", function() {
          var contactInput = document.getElementById("contact_no");
          var prefix = "+63";

          // Set the initial value of the input field
          contactInput.value = prefix;

          contactInput.addEventListener("input", function() {
              var inputValue = contactInput.value.trim();

              // If the user removes the prefix, add it back
              if (!inputValue.startsWith(prefix)) {
                  contactInput.value = prefix + inputValue;
              }
          });
      });
    </script>
@endsection