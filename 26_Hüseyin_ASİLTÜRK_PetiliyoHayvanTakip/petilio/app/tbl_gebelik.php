<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_gebelik extends Model
{
    protected $fillable = [ 
        "asiTarih", 
        "kontrol",
    ]; 
    protected $guarded = [
        "id"
    ];
}
