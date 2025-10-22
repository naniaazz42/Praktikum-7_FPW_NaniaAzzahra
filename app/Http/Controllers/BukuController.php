<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
//import
use App\Models\buku;
use App\Models\KategoriBuku;
use Illuminate\Http\Request; 
=======
use App\Models\Buku;
use Illuminate\Http\Request;
>>>>>>> origin/main

class BukuController extends Controller
{
    public function index(){
<<<<<<< HEAD
        $data = Buku ::with('kategoriBuku')->get();
      
        return view('buku', compact('data'));  
    }

    public function create(){ 
        $kategoriBuku = KategoriBuku::all();
        return view('tambah_buku', compact('kategoriBuku'));
    }
    
    public function store(Request $request){ //menyimpan data buku baru ke database
=======
        $data = Buku::all();
        return view('buku', compact('data'));
    }

    public function create(){
        return view('tambah-buku');
    }

    public function store(Request $request){
>>>>>>> origin/main
        $validasi = $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
<<<<<<< HEAD
            'kategori_buku_id' => 'required|exists:kategori_buku,id',
=======
>>>>>>> origin/main
        ]);

        Buku::create($validasi);
        return redirect('/buku');
    }

<<<<<<< HEAD
    public function edit($id)
    {
        $buku = \App\Models\Buku::findOrFail($id);
        $kategoriBuku = KategoriBuku::all();
        return view('edit_buku', compact('buku', 'kategoriBuku'));
    }
    
    public function update(Request $request, $id)
    {
=======
    public function edit($id) {
        $buku = Buku::find($id);
        return view('edit-buku', compact('buku'));
    }

    public function update(Request $request, $id) {
>>>>>>> origin/main
        $validasi = $request->validate([
            'judul' => 'required|string|sometimes|max:255',
            'pengarang' => 'required|string|sometimes|max:255',
            'penerbit' => 'required|string|sometimes|max:255',
<<<<<<< HEAD
            'kategori_buku_id' => 'required|exists:kategori_buku,id',
=======
>>>>>>> origin/main
        ]);

        Buku::where('id', $id)->update($validasi);
        return redirect('/buku');
    }
<<<<<<< HEAD
    
    public function destroy($id)
    {
=======

    public function destroy($id) {
>>>>>>> origin/main
        Buku::destroy($id);
        return redirect('/buku');
    }
}