@extends('layouts.main')

@section('container')


<h1 class="text-center text">Daftar Obat</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Obat</th>
            <th>Deskripsi</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($daftarObats as $daftarObat)
        <tr>
            <td>{{ $daftarObat->id }}</td>
            <td>{{ $daftarObat->nama_obat }}</td>
            <td>{{ $daftarObat->deskripsi }}</td>
            <td>{{ $daftarObat->created_at }}</td>
            <td>{{ $daftarObat->updated_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- <ul>
    @foreach($daftarObats as $daftarObat)
        <li>{{ $daftarObat->nama_obat }} - {{ $daftarObat->deskripsi }}</li>
    @endforeach
</ul> --}}


@endsection