<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class dosenController extends Controller
{
     public function awal()
     {
     	return "Hello dari dosenController";
     }
     public function tambah()
     {
     	return $this->simpan();
     }
     public function simpan()
     {
     	$dosen = new dosen();
     	$dosen->nama = 'Angel';
     	$dosen->nip = '112017';
     	$dosen->alamat = 'perjuangan baru';
     	$dosen->pengguna_id = '3';
     	$dosen->save();
     	return "data dengan nama {$dosen->nama} telah tersimpan";
     }
}
