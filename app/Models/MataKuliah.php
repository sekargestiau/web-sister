<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $primaryKey = 'kode_matkul';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['kode_matkul', 'nama_matkul', 'sks', 'ruang'];

    public function perkuliahan()
    {
        return $this->hasMany(Perkuliahan::class, 'kode_matkul');
    }
}
