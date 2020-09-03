@extends('layouts.master')
@section('header')
    <h2>List Bensin</h2>
@stop
@section('content')
    <a href="bensin/create" class="btn btn-primary">Tambah</a>
    <table class="table table-bordered" style="margin-top: 10px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>RON</th>
                <th>Jenis</th>
                <th>Aksi</th>
            </tr>
            <tbody>
                @foreach($bensins as $bensin)
                    <tr>
                        <td>{{ $lopp->iteration }}</td>
                        <td>{{ $bensin->nama }}</td>
                        <td>{{ $bensin->harga }}</td>
                        <td>{{ $bensin->ron }}</td>
                        <td>{{ $bensin->id_vehicle }}</td>
                        <td>
                            <a href="" class="btn btn-warning">Ubah</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
@stop