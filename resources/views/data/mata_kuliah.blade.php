@extends('layouts.app')

@section('title', 'Data Mata Kuliah')

@section('header', 'Data Mata Kuliah')

@section('content')
    <h2>Data Mata Kuliah</h2>
    <table>
        <thead>
            <tr>
                <th>Kode Matkul</th>
                <th>Nama Matkul</th>
                <th>SKS</th>
                <th>Ruang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $matkul)
                <tr>
                    <td>{{ $matkul['kode_matkul'] }}</td>
                    <td>{{ $matkul['nama_matkul'] }}</td>
                    <td>{{ $matkul['sks'] }}</td>
                    <td>{{ $matkul['ruang'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
