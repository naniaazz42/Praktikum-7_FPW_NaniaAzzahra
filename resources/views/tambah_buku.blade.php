@extends('app')
 
@section('content')

<h1 style="text-align:center">Welcome to our Buku Page</h1>
<form action="simpan_buku" method="post" >
    @csrf
    <div>
        <label for="">Judul</label>
        <input type="text" name="judul"><br><br>
    </div>
    <div>
        <label for="">Pengarang</label>
        <input type="text" name="pengarang"><br><br>
    </div>
    <div>
        <label for="">Penerbit</label>
        <input type="text" name="penerbit"><br><br>
    </div>
    <div>
        <label for="">Kategori Buku</label>
        <select name="kategori_buku_id" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategoriBuku as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">simpan</button>
    </div>
</form>
@endsection