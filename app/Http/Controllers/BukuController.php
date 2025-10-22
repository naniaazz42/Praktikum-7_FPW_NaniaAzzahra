<?php

namespace App\Http\Controllers;

//import
use App\Models\buku;
use App\Models\KategoriBuku;
use Illuminate\Http\Request; 

class BukuController extends Controller
{
    public function index(){
        $data = Buku ::with('kategoriBuku')->get();
      
        return view('buku', compact('data'));  
    }

    public function create(){ 
        $kategoriBuku = KategoriBuku::all();
        return view('tambah_buku', compact('kategoriBuku'));
    }
    
    public function store(Request $request){ //menyimpan data buku baru ke database
        $validasi = $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'kategori_buku_id' => 'required|exists:kategori_buku,id',
        ]);

        Buku::create($validasi);
        return redirect('/buku');
    }

    public function edit($id)
    {
        $buku = \App\Models\Buku::findOrFail($id);
        $kategoriBuku = KategoriBuku::all();
        return view('edit_buku', compact('buku', 'kategoriBuku'));
    }
    
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'judul' => 'required|string|sometimes|max:255',
            'pengarang' => 'required|string|sometimes|max:255',
            'penerbit' => 'required|string|sometimes|max:255',
            'kategori_buku_id' => 'required|exists:kategori_buku,id',
        ]);

        Buku::where('id', $id)->update($validasi);
        return redirect('/buku');
    }
    
    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect('/buku');
    }
}