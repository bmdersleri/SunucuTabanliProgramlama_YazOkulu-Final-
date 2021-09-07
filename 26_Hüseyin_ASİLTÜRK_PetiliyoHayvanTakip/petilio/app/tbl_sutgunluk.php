<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_sutgunluk extends Model
{
    protected $table = "tbl_sutgunluk"; 

    protected $fillable = [
        "miktar", 
        "tarih", 
        "ogun", 
        "sistem", 
        "bFiyat",
    ];

    protected $guarded = [
        "id"
    ];
}
