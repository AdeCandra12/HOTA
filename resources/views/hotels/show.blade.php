@extends('adminlte::page')

@section('title', 'Detail Hotel')

@section('content_header')
    <h1 class="m-0 text-dark">Detail Hotel</h1>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

@stop

@section('content')
<div class="card">
    <div class="card-body">
        <h1 class="card-title" style="font-size: 2.5rem; color: #000000;">{{ $hotel->nama }}</h1>
        <br>
        <p class="card-text"><img src="{{asset('storage/'.$hotel->foto_hotel)}}" alt="" width="500px"></p>
    
        <p class="card-text"><strong>Alamat:</strong> {{ $hotel->alamat }}</p>
        <p class="card-text"><strong>Rating:</strong> {{ $hotel->rating }}</p>
        <p class="card-text"><strong>Kamar:</strong> {{ $hotel->type_kamar }}</p>
        <p class="card-text"><strong>Fasilitas:</strong> {{ $hotel->fasilitas }}</p>
        <p class="card-text"><strong>deskripsi:</strong> {{ $hotel->deskripsi }}</p>
        <p class="card-text"><strong>Latitude:</strong> {{ $hotel->latitude }}</p>
        <p class="card-text"><strong>Longitude:</strong> {{ $hotel->longitude }}</p>
        <div id="map" style="height: 400px; margin-bottom: 20px;"></div>
        <a href="{{ route('hotels.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@stop

@push('js')
<script>
    var map = L.map('map').setView([{{ $hotel->latitude }}, {{ $hotel->longitude }}], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([{{ $hotel->latitude }}, {{ $hotel->longitude }}]).addTo(map)
        .bindPopup('{{ $hotel->nama }}')
        .openPopup();

</script>
@endpush
