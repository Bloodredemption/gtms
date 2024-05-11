@extends('layout')

@section('content-wrapper')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h3 class="font-weight-bold">View Route</h3>
                            </div>
                            <a href="/routes">&#8592; Back</a>
                        </div>
                        <h6 class="font-weight-normal mb-0">Route Information.</h6>
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