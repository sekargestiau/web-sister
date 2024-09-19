@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('header', 'Data Mahasiswa')

@section('content')
    <h2>Data Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $mhs)
                <tr>
                    <td>{{ $mhs['nim']}}</td>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['alamat'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
