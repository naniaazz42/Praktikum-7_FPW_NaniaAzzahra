@extends('app')

@section('content')
<h1>Edit Buku</h1>
<form action="/buku/{{ $buku->id }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Judul</label>
        <input type="text" name="judul" value="{{ $buku->judul }}"><br><br>
    </div>

    <div>
        <label>Pengarang</label>
        <input type="text" name="pengarang" value="{{ $buku->pengarang }}"><br><br>
    </div>

    <div>
        <label>Penerbit</label>
        <input type="text" name="penerbit" value="{{ $buku->penerbit }}"><br><br>
    </div>

    <div>
        <label for="">Kategori Buku</label>
        <select name="kategori_buku_id" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategoriBuku as $kategori)
                <option value="{{ $kategori->id }}" 
                    {{ $buku->kategori_buku_id == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>
    <br>
    <div>
    <button type="submit">Update</button>
    </div>
</form>
@endsection