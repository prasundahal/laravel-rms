<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tableorder extends Model
{
    protected $fillable = [
        'table_number',
        'iteam_name',

        'iteam_price'


    ];
}
