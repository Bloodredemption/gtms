<!DOCTYPE html>
<html lang="en">

    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- plugins:css -->
    {{-- <link rel="stylesheet" href="../../vendors/feather/feather.css">
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" /> --}}

        <link rel="stylesheet" href="{{ asset('css/vendors/feather/feather.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendors/ti-icons/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    </head>

    <body>
        <div class="container-scroller">
          <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
              <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                  <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <div class="brand-logo text-center">
                      <img src="{{ asset('images/logo.png') }}" alt="logo">
                    </div>
                    <h4 class="text-center">Register here</h4>
                    <h6 class="font-weight-light text-center">Please fill all the required fields.</h6>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register') }}" class="pt-3">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name <span style="color: red;">*</span></label>
                            <input type="text" name="fullname" class="form-control form-control-lg" id="fullname" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address <span style="color: red;">*</span></label>
                            <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password <span style="color: red;">*</span></label>
                            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                                <label for="contact_no">Contact No. <span style="color: red;">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span style="background-color: #ffffff;" class="input-group-text"><img src="{{ asset('images/ph-flag.jpg') }}" alt="PH Flag" style="height: 1em;"></span>
                                    </div>
                                    <input type="tel" class="form-control" id="contact_no" name="contact_no" placeholder="Contact No." required>
                                </div>
                            </div>
                        <div class="mb-4">
                            <div class="form-check">
                                <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input" name="terms" required>
                                    I agree to all Terms & Conditions
                                </label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                        </div>
                        <div class="text-center mt-4 font-weight-light">
                          Already have an account? <a href="/login" class="text-primary">Login</a>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
    <script src="{{ asset('css/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>
        <!-- endinject -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
</body>

</html>
