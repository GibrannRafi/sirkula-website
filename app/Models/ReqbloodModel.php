<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReqbloodModel extends Model
{
    //
    protected $table = "req_blood";

    protected $fillable = [
        "nama_pasien",
        "nama_rs",
        "kota",
        "alamat",
        "blood_type",
        "rhesus",
        "donor_type",
        "fullname",
        "no_telp",
        "email"

    ];
}
