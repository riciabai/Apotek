<?php

namespace App;

use App\Obat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Supplier extends Model
{
    //
    /**
     * field yang bisa mass assignment
     */
    protected $fillable = [
        'nama', 'alamat',
    ];

    /**
     * Relasi dengan obat
     * supplier ini punya banyak obat
     */
    public function obat()
    {
        return $this->hasMany(Obat::class);
    }

    /**
     * tambah entry obat baru ke database atas nama seorang supplier
     */
    public function obatBaru(Request $req){
        $this->obat()->create([
            'nama' => $req->nama,
            'jenis' => $req->jenis,
            'stok' => $req->stok,
            'harga' => $req->harga,
        ]);
    }
}
