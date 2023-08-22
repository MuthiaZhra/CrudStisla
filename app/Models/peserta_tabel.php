<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta_tabel extends Model
{
    use HasFactory;
    protected $table='peserta_tabel';
    protected $fillable =[
        'id','nis','namalengkap','jk','kelas','tgllahir','nilai_web','nilai_pbo','nilai_db'
    ];
}
