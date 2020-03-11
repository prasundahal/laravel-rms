<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'iteam_name',
        'iteam_price',
        'table_number',
        'iteam_time'

    ];


}
