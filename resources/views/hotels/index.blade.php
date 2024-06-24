@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark"></h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{route('hotels.create')}}" class="btn btn-primary mb-2">Tambah</a>
                @if (session('succes_message'))
                    <div class="alert alert-success">
                        {{session('succes_message')}}
                    </div>
                @endif
                <table class="table table-hover table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama Hotel</th>
                        <th>Alamat</th>
                        <th>rating</th>
                        <th>Kamar</th>
                        <th>Fasilitas</th>
                        <th>deskripsi</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Hotels as $key => $hotels)
                    <tr>
                        <td><img src="{{asset('storage/'.$hotels->foto_hotel)}}" alt="" style="width: 100px"></td>
                        <td>{{$hotels -> nama}}</td>
                        <td>{{$hotels -> alamat}}</td>
                        <td>{{$hotels -> rating}}</td>
                        <td>{{$hotels -> type_kamar}}</td>
                        <td>{{$hotels -> fasilitas}}</td>
                        <td>{{$hotels -> deskripsi}}</td>
                        <td>{{$hotels -> latitude}}</td>
                        <td>{{$hotels -> longitude}}</td>
                        <td>
                            <a href="{{ route('hotels.show', $hotels->id) }}" class="btn btn-success mb-2">Detail</a>
                            <a href="{{ route('hotels.edit', $hotels->id) }}" class="btn btn-warning mb-2">Edit</a>
                            <form action="{{ route('hotels.destroy', $hotels->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mb-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop