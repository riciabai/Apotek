<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    //
    protected $fillable = [
        'nama','jenis','stok','harga'
    ];

}