@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Data Hotel</h1>
     {{-- css --}}
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     {{-- js --}}
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
     <style>
         #map {height: 500px;}
     </style>
@stop

@section('content')
<form action="{{route('hotels.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow: auto">
                    <table style="width: 100%">
                        <tr>
                            <td><label for="labelNama">Nama Hotel</label></td>
                            <td><input type="text" size="70" id="nama" placeholder="Nama hotel" name="nama"></td>
                        </tr>
                        <tr>
                            <td><label for="labelAlamat">Alamat</label></td>
                            <td><input type="text" size="70" id="alamat" placeholder="Alamat" name="alamat"></td>
                        </tr>
                        <tr>
                            <td><label for="labelKamar">kamar</label></td>
                            <td><textarea name="type" id="type" placeholder="kamar yang tersedia" cols="70" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="labelFasilitas">Fasilitas Tambahan</label></td>
                            <td><input type="text" size="70" id="iasilitas" placeholder="Fasilitas" name="fasilitas"></td>
                        </tr>
                        <tr>
                            <td><label for="labelRating">Rating</label></td>
                            <td><input type="number" size="70" id="rating" placeholder="Rating" name="rating"></td>
                        </tr> 
                        <tr>
                            <td><label for="labelDeskripsi">Deskripsi</label></td>
                            <td><textarea name="deskripsi" id="deskripsi" cols="70" rows="10" placeholder="Deskripsi"></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="labelLatitude">Latitude</label></td>
                            <td><input type="text" size="70" id="latitude" placeholder="Latitude" name="latitude"></td>
                        </tr>
                        <tr>
                            <td><label for="labelLongitude">Longitude</label></td>
                            <td><input type="text" size="70" id="longitude" placeholder="Longitude" name="longitude"></td>
                        </tr>
                        <tr>
                            <td><label for="foto_hotel" class="form-label">Foto Hotel</label></td>
                            <td><input class="form-control" type="file" size="70" id="foto_hotel" placeholder="Foto" name="foto_hotel"></td>
                        </tr>
                    </table>
                    <br>
                    <div id="map" class="mt-2"></div>
                    <br>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    <a href="{{route('hotels.index')}}" class="btn btn-default mt-2">Batal</a>
                </div>
            </div>
        </div>
    </div>
</form>
@stop

@push('js')
<script>
    var map = L.map('map').setView([-6.8931149, 107.6090784], 15);

    L.tileLayer('https://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3'] 
    }).addTo(map);


    // Define a click event handler
    var marker;
    function onMapClick(e) {
    // alert("Latitude: " + e.latlng.lat + "\nLongitude: " + e.latlng.lng);
    document.getElementById('latitude').value = e.latlng.lat;
    document.getElementById('longitude').value = e.latlng.lng;

    if (marker) {
        map.removeLayer(marker);
    }

    marker = L.marker(e.latlng).addTo(map)
        .bindPopup("Koordinat: " + e.latlng.toString())
        .openPopup();

    marker.on('click', function(e) {
        map.removeLayer(marker);
        document.getElementById('latitude').value = null;
        document.getElementById('longitude').value = null;
    });
}

// Add a click event listener to the map
map.on('click', onMapClick);

</script>        

@endpush
