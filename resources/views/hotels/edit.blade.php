@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Hotel</h1>
    {{-- css --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin="" />
    {{-- js --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
    <style>
        #map {
            height: 500px;
        }
    </style>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('hotels.update', $hotels->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body" style="overflow: auto">
                            <table style="width: 100%">
                                <tr>
                                    <td><label>Nama Hotel</label></td>
                                    <td><input type="text" size="70" name="nama" value="{{ $hotels->nama }}"
                                            class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label>Alamat</label></td>
                                    <td><input type="text" size="70" name="alamat" value="{{ $hotels->alamat }}"
                                            class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label>Rating</label></td>
                                    <td><input type="text" size="70" name="rating" value="{{ $hotels->rating }}"
                                            class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label>kamar</label></td>
                                    <td><textarea name="type" id="type" cols="70" rows="10" class="form-control">{{ $hotels->type_kamar}}</textarea></td>
                                </tr>
                                <tr>
                                    <td><label>Fasilitas Tambahan</label></td>
                                    <td><input type="text" size="70" name="fasilitas" value="{{ $hotels->fasilitas }}"
                                            class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label>Deskripsi</label></td>
                                    <td><textarea name="deskripsi" id="deskripsi" cols="70" rows="10"
                                            class="form-control">{{ $hotels->deskripsi }}</textarea></td>
                                <tr>
                                    <td><label>Latitude</label></td>
                                    <td><input id="latitude" size="70" type="text" name="latitude"
                                            value="{{ $hotels->latitude }}" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label>Longitude</label></td>
                                    <td><input id="longitude" size="70" type="text" name="longitude"
                                            value="{{ $hotels->longitude }}" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label for="foto_hotel" class="form-label">Foto Hotel</label></td>
                                    <td> <input class="form-control mb-3" type="file" id="foto_hotel" name="foto_hotel" onchange="previewImage(event)"></td>
                                    <img id="image-preview" class="img-fluid" style="display: none;">
                                    @if($hotels->foto_hotel)
                                        <img src="{{ asset('storage/' . $hotels->foto_hotel) }}" alt="Foto Hotel" class="img-fluid" id="existing-image">
                                    @else
                                        No Image
                                    @endif
                                </tr>
                                
                                
                            </table>
                        </div>
                        <br>

                        <div id="map" class="mt-2"></div>
                        <br>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <script>
        var map = L.map('map').setView([{{ $hotels->latitude }}, {{ $hotels->longitude }}], 15);

        L.tileLayer('https://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);

        // create marker from id
        var marker = L.marker([{{ $hotels->latitude }}, {{ $hotels->longitude }}]).addTo(map);

        function onMapClick(e) {
            if (marker) {
                map.removeLayer(marker);
            }
            marker = new L.marker(e.latlng).addTo(map);
            document.getElementById('latitude').value = e.latlng.lat;
            document.getElementById('longitude').value = e.latlng.lng;
        }

        map.on('click', onMapClick);

        // Update photo preview
        // document.getElementById('foto_hotel').addEventListener('change', function(e) {
        //     var reader = new FileReader();
        //     reader.onload = function(e) {
        //         var img = document.createElement('img');
        //         img.src = e.target.result;
        //         img.width = 150;
        //         img.height = 100;
        //         var photoContainer = document.getElementById('foto-preview');
        //         photoContainer.innerHTML = ''; // Clear existing photo preview
        //         photoContainer.appendChild(img);
        //     }
        //     reader.readAsDataURL(this.files[0]);
        // });

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var preview = document.getElementById('image-preview');
            var existingImage = document.getElementById('existing-image');
            if (existingImage) {
                existingImage.style.display = 'none';
            }
            preview.src = reader.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    </script>
@endpush
