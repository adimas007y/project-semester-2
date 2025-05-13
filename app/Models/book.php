<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{

    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'judul',
        'penerbit',
        'pencipta',
        'file_path'
    ];

    protected $primaryKey = 'ID';
    public $timestamps = false;
}
