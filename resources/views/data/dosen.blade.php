@extends('layouts.app')

@section('title', 'Data Dosen')

@section('header', 'Data Dosen')

@section('content')
    <h2>Data Dosen</h2>
    <table>
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>No WA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dosen)
                <tr>
                    <td>{{ $dosen['nip'] }}</td>
                    <td>{{ $dosen['nama'] }}</td>
                    <td>{{ $dosen['no_wa'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
