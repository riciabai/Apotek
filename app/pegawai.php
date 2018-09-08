<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
class pegawai extends Model
{
    //
    protected $fillable = [
        'nama', 'alamat','kelamin','jabatan'
    ];


    /**
     * Relasi dengan user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
