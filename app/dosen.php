<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
   protected $table = 'dosen';
   protected $fillable = ['nama','nip','alamat','pengguna_id'];
   
   public function pengguna()
   {
   	return $this_>belongsTO(Pengguna::class);
   }
   public function dosen_matakuliah()
   {
   	return $this_>hasMany(dosen_mataKuliah::class);
   }
 }
 