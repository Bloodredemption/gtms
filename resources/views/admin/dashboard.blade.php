@extends('layout')

@section('content-wrapper')

  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome, Admin Ejaxx!</h3>
            <h6 class="font-weight-normal mb-0">All systems are running smoothly. You have <span class="text-primary">3 unread alerts.</span></h6>
          </div>
          <div class="col-12 col-xl-4">
            {{-- <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                  <a class="dropdown-item" href="#">January - March</a>
                  <a class="dropdown-item" href="#">March - June</a>
                  <a class="dropdown-item" href="#">June - August</a>
                  <a class="dropdown-item" href="#">August - November</a>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          <div class="card-people mt-auto">
            <img src="{{ asset('images/dashboard/people.svg') }}" alt="people">
            <div class="weather-info">
              <div class="d-flex">
                <div>
                  <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>60<sup>C</sup></h2>
                </div>
                <div class="ml-2">
                  <h4 class="location font-weight-normal">Balingasag</h4>
                  <h6 class="font-weight-normal">Misamis Oriental</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Total Barangays</p>
                <p class="fs-30 mb-2">99</p>
                <p>10.00% (30 days)</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Total Admins</p>
                <p class="fs-30 mb-2">99</p>
                <p>22.00% (30 days)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">Number of Complaints</p>
                <p class="fs-30 mb-2">99</p>
                <p>2.00% (30 days)</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Number of Residents</p>
                <p class="fs-30 mb-2">99</p>
                <p>0.22% (30 days)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    <div class="row">
      <div class="col-md-6 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">Today's Schedule (Monday)</p>
            <div class="table-responsive">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th class="pl-0  pb-2 border-bottom">Baranggay</th>
                    <th class="border-bottom pb-2">Date/Time</th>
                    <th class="border-bottom pb-2">Driver</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pl-0">Brgy. 1</td>
                    <td><p class="mb-0"><span class="font-weight-bold mr-2">May 11, 2024</span>8:00AM</p></td>
                    <td class="text-muted">Driver 1</td>
                  </tr>
                  <tr>
                    <td class="pl-0">Brgy. 2</td>
                    <td><p class="mb-0"><span class="font-weight-bold mr-2">May 11, 2024</span>8:00AM</p></td>
                    <td class="text-muted">Driver 1</td>
                  </tr>
                  <tr>
                    <td class="pl-0">Brgy. 3</td>
                    <td><p class="mb-0"><span class="font-weight-bold mr-2">May 11, 2024</span>8:00AM</p></td>
                    <td class="text-muted">Driver 1</td>
                  </tr>
                  <tr>
                    <td class="pl-0">Brgy. 4</td>
                    <td><p class="mb-0"><span class="font-weight-bold mr-2">May 11, 2024</span>8:00AM</p></td>
                    <td class="text-muted">Driver 1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Complaints</p>
            <ul class="icon-data-list">
              <li>
                <div class="d-flex">
                  <img src="{{ asset('images/faces/def_userimg.jpg') }}" alt="user">
                  <div>
                    <p class="text-info mb-1">Korin Kilaton (Brgy. 1)</p>
                    <p class="mb-0">The garbage in brgy 1 has not been collected yet.</p>
                    <small>May 11, 2024 | 9:30 am</small>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="{{ asset('images/faces/def_userimg.jpg') }}" alt="user">
                  <div>
                    <p class="text-info mb-1">Augustine Bhern A. Dumapias (Brgy. 2)</p>
                    <p class="mb-0">The garbage in brgy 2 has not been collected yet.</p>
                    <small>May 11, 2024 | 9:30 am</small>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="{{ asset('images/faces/def_userimg.jpg') }}" alt="user">
                  <div>
                    <p class="text-info mb-1">EJ Lester B. Pimentel (Brgy. 3)</p>
                    <p class="mb-0">The garbage in brgy 3 has not been collected yet.</p>
                    <small>May 11, 2024 | 9:30 am</small>
                  </div>
                </div>
              </li>
            </ul>
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
                          <h3 class="font-weight-bold">Tracking</h3>
                      </div>
                  </div>
                  <h6 class="font-weight-normal mb-0">Live tracking of dump truck.</h6>
              </div>
              
          </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
              <div class="card-body">
                  <!-- <div id="map" style="height: 400px;"></div> -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63096.11665191081!2d124.7660624249118!3d8.738246012731992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ffe1cf2948ff3b%3A0x4d4873fe87748085!2sBalingasag%2C%20Misamis%20Oriental!5e0!3m2!1sen!2sph!4v1715412145232!5m2!1sen!2sph" width="1170" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  <div class="row mt-3">
                      <div class="col-md-6">
                          <label for="latitude">Latitude:</label>
                          <input type="text" class="form-control" value="Sample Latitude" id="latitude" readonly>
                      </div>
                      <div class="col-md-6">
                          <label for="longitude">Longitude:</label>
                          <input type="text" class="form-control" value="Sample Longitude" id="longitude" readonly>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

  <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
  <script>
      // Function to initialize the map
      function initMap() {
          // Coordinates for the center of the map
          var center = { lat: 40.7128, lng: -74.0060 }; // New York City

          // Create a new map inside the #map container
          var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 10, // Zoom level
              center: center // Center of the map
          });

          // You can add additional features, markers, etc., to the map here
      }
  </script>
@endsection