<?php

namespace App;

use App\pegawai;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password',
    ];

    /**
     * Relasi antaran user dengan pegawai
     */

    public function pegawai()
    {
        return $this->hasOne(pegawai::class);
    }

    public function jadiPegawai($request)
    {
        $this->pegawai()->create([
            'nama' => $request['username'],
            'alamat' => $request['alamat'],
            'kelamin' => $request['kelamin'],
            'jabatan' => $request['jabatan'],
        ]);
    }
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
