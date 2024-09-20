<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DataController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function mahasiswa()
    {
        $response = $this->client->request('GET', 'http://ip_address:3000/api/mahasiswa'); // ganti dengan ip address app server
        $data = json_decode($response->getBody(), true);

        return view('data.mahasiswa', ['data' => $data]);
    }

    public function dosen()
    {
        $response = $this->client->request('GET', 'http://ip_address:3000/api/dosen'); // ganti dengan ip address app server
        $data = json_decode($response->getBody(), true);

        return view('data.dosen', ['data' => $data]);
    }

    public function mataKuliah()
    {
        $response = $this->client->request('GET', 'http://ip_address:3000/api/mata_kuliah'); // ganti dengan ip address app server
        $data = json_decode($response->getBody(), true);

        return view('data.mata_kuliah', ['data' => $data]);
    }

    public function perkuliahan()
    {
        // Fetch perkuliahan data
        $responsePerkuliahan = $this->client->request('GET','http://ip_address:3000/api/perkuliahan'); // ganti dengan ip address app server
        $perkuliahanData = json_decode($responsePerkuliahan->getBody(), true);

        // Fetch mata kuliah data
        $responseMatakuliah = $this->client->request('GET','http://ip_address:3000/api/mata_kuliah'); // ganti dengan ip address app server
        $matakuliahData = json_decode($responseMatakuliah->getBody(), true);

        // Fetch dosen data
        $responseDosen = $this->client->request('GET','http://ip_address:3000/api/dosen'); // ganti dengan ip address app server
        $dosenData = json_decode($responseDosen->getBody(), true);

        // Fetch mahasiswa data
        $responseMahasiswa = $this->client->request('GET','http://ip_address:3000/api/mahasiswa'); // ganti dengan ip address app server
        $mahasiswaData = json_decode($responseMahasiswa->getBody(), true);

        // Prepare data for view
        $data = [
            'perkuliahan' => $perkuliahanData,
            'mata_kuliah' => $matakuliahData,
            'dosen' => $dosenData,
            'mahasiswa' => $mahasiswaData,
        ];

        return view('data.perkuliahan', $data);
    }

}
