<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubbloodModel extends Model
{
    //
    protected $table = "sub_blood";
    protected $fillable = [
        "nama_donor",
        "tgl_lahir",
        "jenis_kel",
        "alamat",
        "blood_type",
        "rhesus",
        "weight",
        "umur",
        "fullname",
        "no_telp",
        "email"
    ];
}
