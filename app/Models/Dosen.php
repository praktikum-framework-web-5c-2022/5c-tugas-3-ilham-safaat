<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dosen extends Model
{
    protected $table = 'dosens';
    protected $fillable = ['nidn', 'nama', 'jenis_kelamin', 'alamat', 'ttl', 'photo', 'created_at', 'updated_at'];
    use HasFactory; 
}
