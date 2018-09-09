<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Obat;
use Illuminate\Http\Request;
class Supplier extends Model
{
    //

    protected $fillable = [
        'nama','alamat'
    ];

    public function obat()
    {
        return $this->hasMany(Obat::class);
    }

    public function obatBaru(Request $req){
        $this->obat()->create([
            'nama' => $req->nama,
            'jenis' => $req->jenis,
            'stok' => $req->stok,
            'harga' => $req->harga
        ]);
    }
}
