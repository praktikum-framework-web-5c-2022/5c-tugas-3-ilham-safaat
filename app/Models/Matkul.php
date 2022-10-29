<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkuls';
    protected $fillable = ['kode_matkul', 'nama_matkul', 'created_at', 'updated_at'];
    use HasFactory;
}
