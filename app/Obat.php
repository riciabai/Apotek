<?php

namespace App;

use App\Supplier;
use Illuminate\Http\Request;
use App\Supplier;
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
