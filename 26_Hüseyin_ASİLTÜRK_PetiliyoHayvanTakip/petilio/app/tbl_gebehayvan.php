<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_gebehayvan extends Model
{
    protected $fillable = [ 
        "gebelik_id", 
        "hayvan_id",
    ];

    protected $guarded = [
        "id"
    ];
}
