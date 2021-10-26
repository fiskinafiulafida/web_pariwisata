@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="mapid">

            </div>
        </div>
    </div>
</div>
<div class = "gambar">
    <img id="jp2" src="{{asset('image/zoo.jpg')}}" >
    <img id="jp3" src="{{asset('image/jp.jpg')}}" >
    <img id="jp4" src="{{asset('image/satwa.jpg')}}" >
</div>

<script>
        var map = L.map('mapid').setView([-7.8887774851867505, 112.52781517704486], 10);
		L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	    }).addTo(map);

        // pop up batu secret zoo
        var jp2 = document.getElementById("jp2");
        L.marker([-7.888085341181298, 112.52933026941749]).addTo(map).bindPopup(jp2);
        // pop up museum satwa
        var jp3 = document.getElementById("jp3");
        L.marker([-7.88898264421345, 112.52972898214922]).addTo(map).bindPopup(jp3);
        // pop up jatim park 2
        var jp4 = document.getElementById("jp4");
        L.marker([-7.889109024763767, 112.52776412575123]).addTo(map).bindPopup(jp4);
</script>
@endsection


