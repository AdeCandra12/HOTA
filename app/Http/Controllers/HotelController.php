<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotels;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('hotels.index', [
            'Hotels' => Hotels::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $hotels = new Hotels;
        $hotels->nama = $request->nama;
        $hotels->alamat = $request->alamat;
        $hotels->type_kamar = $request->type;
        $hotels->fasilitas = $request->fasilitas;
        $hotels->rating = $request->rating;
        $hotels->deskripsi = $request->deskripsi;
        $hotels->latitude = $request->latitude;
        $hotels->longitude = $request->longitude;

        if ($request->hasFile('foto_hotel')) {
            $imagepath = $request->file('foto_hotel')->store('foto_hotel', 'public');
            $hotels->foto_hotel = $imagepath;
        }
        $hotels->save();


        return redirect()->route('hotels.index')
            ->with('succes_message', 'Berhasil menambah data baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotels::findOrFail($id);

        return view('hotels.show', compact('hotel'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $hotels = Hotels::findOrFail($id);
        return view('Hotels.edit', compact('hotels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
        $hotels = Hotels::find($id);
        $hotels->nama = $request->nama;
        $hotels->alamat = $request->alamat;
        $hotels->type_kamar = $request->type;
        $hotels->fasilitas = $request->fasilitas;
        $hotels->rating = $request->rating;
        $hotels->deskripsi = $request->deskripsi;
        $hotels->latitude = $request->latitude;
        $hotels->longitude = $request->longitude;
        if ($request->hasFile('foto_hotel')) {
            $imagepath = $request->file('foto_hotel')->store('foto_hotel', 'public');
            $hotels->foto_hotel = $imagepath;
        }
        $hotels->save();

        return redirect()->route('hotels.index')
            ->with('success_message', 'Berhasil mengupdate data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $hotels = Hotels::find($id);
        $hotels->delete();

        return redirect()->route('hotels.index')
            ->with('success_message', 'Berhasil menghapus data');
    }

    public function detail($id)
    {
        $hotel = Hotels::findOrFail($id);
        dd($hotel);

        return view('detail', compact('hotel'));
    }
}
