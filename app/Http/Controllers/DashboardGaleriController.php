<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class DashboardGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.galeri.index', [
            'galeri' => Galeri::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galeri.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_gambar' => 'required',
            'gambar' => 'required|image'
        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('galeri_images');
        Galeri::create($validatedData);
        return redirect('/dashboard/galeri')->with('success', 'Gambar baru berhasil diupload!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::firstWhere('id', $id);
        return view('dashboard.galeri.edit', [
            'galeri' => $galeri
        ]);
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
        $galeri = Galeri::firstWhere('id', $id);
        $validatedData = $request->validate([
            'nama_gambar' => 'required',
            'gambar' => 'image'
        ]);

        if($request->file('gambar')) {
            Storage::delete($galeri->gambar);
            $validatedData['gambar'] = $request->file('gambar')->store('galeri_images');
        }

        Galeri::where('id', $galeri->id)
                ->update($validatedData);
        return redirect('/dashboard/galeri')->with('success', 'Gambar berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::firstWhere('id', $id);
        if($galeri->image) {
            Storage::delete($galeri->gambar);
        }
        Galeri::destroy($galeri->id);
        return redirect('/dashboard/galeri')->with('success', 'Gambar berhasil dihapus!');
    }
}
