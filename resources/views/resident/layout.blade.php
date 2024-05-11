<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('css/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('js/select.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
  <style>
    .btnedit{
      display: inline-block;
      font-weight: 400;
      color: #1F1F1F;
      text-align: center;
      vertical-align: middle;
      user-select: none;
      background-color: transparent;
      border: 1px solid transparent;
      font-size: 0.875rem;
      line-height: 1;
      border-radius: 0.1875rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('resident.partials.header')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @include('resident.partials.sidebar')
      <!-- partial -->
      <div class="main-panel">
        @yield('content-wrapper')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        @include('resident.partials.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('css/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
{{-- <script src="{{ asset('css/vendors/chart.js/Chart.min.js') }}"></script> --}}
{{-- <script src="{{ asset('css/vendors/datatables.net/jquery.dataTables.js') }}"></script> --}}
{{-- <script src="{{ asset('css/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script> --}}
{{-- <script src="{{ asset('js/dataTables.select.min.js') }}"></script> --}}
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
<script src="{{ asset('js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('js/dashboard.js') }}"></script>
{{-- <script src="{{ asset('js/Chart.roundedBarCharts.js') }}"></script> --}}

  <!-- End custom js for this page-->
</body>

</html>

