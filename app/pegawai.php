<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
class pegawai extends Model
{
    //

    /**
     * Relasi dengan user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
