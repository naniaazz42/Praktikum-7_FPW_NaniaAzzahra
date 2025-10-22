
@extends('app')
 
@section('content')
<h1>Welcome to our Buku Page</h1>
<div>
    <a href="/tambah_buku"><button>Tambah Buku</button></a>
</div>
<table border="1">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Kategori</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $buku)
        <tr>
            <td>{{$buku->judul}}</td>
            <td>{{$buku->pengarang}}</td>
            <td>{{$buku->penerbit}} </td>
            <td>{{ $buku->kategoriBuku ? $buku->kategoriBuku->nama_kategori : 'Tidak ada kategori' }}</td>
            <td><a href="/buku/{{ $buku->id }}/edit">Edit</a> | 
            <form action="/buku/{{ $buku->id }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>


@endsection