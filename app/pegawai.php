<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    //
    protected $fillable = [
        'nama', 'alamat', 'kelamin', 'jabatan',
    ];

    /**
     * Relasi dengan user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
