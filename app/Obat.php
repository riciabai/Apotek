<?php

namespace App;

use App\Supplier;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    //
    protected $fillable = [
        'nama', 'jenis', 'stok', 'harga',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

}
