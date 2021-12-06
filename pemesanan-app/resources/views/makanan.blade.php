@extends('layouts/main')

@section('conten')
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>makanan</th>
            <th>harga</th>
            <th>gambar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($makanan as $m)
        <tr>
            <td>{{ $m->id}}</td>
            <td>{{ $m->makanan}}</td>
            <td>{{ $m->harga}}</td>
            <td>{{ $m->gambar}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection