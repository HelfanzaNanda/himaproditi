<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //protected $guarded = [];

    protected $fillable = [
        'id',
        'nim',
        'nama',
        'jenis_kelamin',
        'alamat',
        'id_agama',
        'quote',
        'filename',
        'id_kelas',
        'id_semester',
        'id_jabatan',
        'username',
        'password',
        'email_verified_at',
        'status',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
        'instagram',
        'telephone'
    ];

    protected $hidden = ['password', 'remember_token'];

}
