<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_gider extends Model
{
    protected $table = "tbl_gider"; 

    protected $fillable = [
        "tur", 
        "ayrinti", 
        "tarih", 
        "tutar"
    ];

    protected $guarded = [
        "id"
    ];
}
