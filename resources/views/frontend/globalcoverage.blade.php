@extends('frontend.layouts.main')
@section('main-container')


    <div class="card">
        <div class="card-body">
            <div id="world-map-markers1" class="worldh world-map" style="height: 500px"></div>
        </div>
    </div>

    <script src="{{ asset('frontend/vendors/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <script type="text/javascript">
        function map(){

            $('#world-map-markers1').vectorMap({
                map: 'world_mill_en',
                scaleColors: ['#6c5ffc', '#e82646', '#05c3fb'],

                normalizeFunction: 'polynomial',

                hoverOpacity: 0.7,

                hoverColor: false,

                regionStyle: {

                    initial: {

                        fill: '#edf0f5'
                    }
                },
                markerStyle: {
                    initial: {
                        r: 6,
                        'fill': '#6c5ffc',
                        'fill-opacity': 0.9,
                        'stroke': '#fff',
                        'stroke-width': 9,
                        'stroke-opacity': 0.2
                    },

                    hover: {
                        'stroke': '#fff',
                        'fill-opacity': 1,
                        'stroke-width': 1.5
                    }
                },
                backgroundColor: 'transparent',
                markers: [{
                    latLng: [40.3, -101.38],
                    name: 'USA',
                }, {
                    latLng: [22.5, 1.51],
                    name: 'India'
                }, {
                    latLng: [50.02, 80.55],
                    name: 'Bahrain'
                }, {
                    latLng: [3.2, 73.22],
                    name: 'Maldives'
                }, {
                    latLng: [35.88, 14.5],
                    name: 'Malta'
                }, ]
            });
        }
        map();
    </script>

@endsection
