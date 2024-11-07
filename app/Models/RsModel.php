<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RsModel extends Model
{
    protected $table = "rs";

    protected $fillable = [
        "nama_rs",
        "alamat",
        "stok_blood",
        "gambar_rs"
    ];
}
