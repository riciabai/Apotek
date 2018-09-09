<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Supplier;
class Obat extends Model
{
    //
    protected $fillable = [
        'nama','jenis','stok','harga'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

}
