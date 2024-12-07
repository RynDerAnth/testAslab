<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tp extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul', 'sub_judul', 'kategori', 'deadline', 'deskripsi'
    ];
}
