<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Matkul::get();
        return view('matkul.index', ['matkuls' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkul/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'kode_matkul' => 'required|unique:matkuls',
            'nama_matkul' => 'required|max:50',
        ]);

        $matkul = new Matkul;
        $matkul->kode_matkul = $request->input('kode_matkul');
        $matkul->nama_matkul = $request->input('nama_matkul');
        $matkul->save();

         return redirect()->route('matkul.index')->with('message', "Data {$request['nama_matkul']} berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function show(Matkul $matkul)
    {
        return view('matkul.detail', [
            'matkul' => $matkul,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Matkul::find($id);
        return view('matkul.edit', [
            'matkul' => $data
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
        $request->validate([
            'kode_matkul' => 'required|unique:matkuls',
            'nama_matkul' => 'required',
        ]);

        $matkul = Matkul::find($id);
        $matkul->kode_matkul = $request->input('kode_matkul');
        $matkul->nama_matkul = $request->input('nama_matkul');

        $matkul->update();

        return redirect()->route('matkul.index')->with('message', "Data mata kuliah berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matkul = Matkul::find($id);
        $matkul->delete();

        return redirect()->route('matkul.index')->with('message', "Data {$matkul['nama']} berhasil dihapus!");
    }
}
