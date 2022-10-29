<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = ['npm', 'nama', 'jenis_kelamin', 'alamat', 'ttl', 'photo', 'created_at', 'updated_at'];
    use HasFactory;
}
