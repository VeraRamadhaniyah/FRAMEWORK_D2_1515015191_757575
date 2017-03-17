<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswaController extends Controller
{
    public function awal()
    {
    	return "Hello dari mahasiswaController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
     {
  	$mahasiswa = new mahasiswa();
  	$mahasiswa->nama = 'Vera Ramadhaniyah';
  	$mahasiswa->nim = '1515015191';
  	$mahasiswa->alamat = 'Dewantara 1';
  	$mahasiswa->pengguna_id = '3';
  	$mahasiswa->save();
    return "data dengan nama {$mahasiswa->nama} telah disimpan";
  }
}
