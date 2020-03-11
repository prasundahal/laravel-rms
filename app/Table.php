<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [

        'table_number',
        'table_capicity'

    ];

    public function tableorder()

    {

        return $this->hasOne('App\Tableorder');

    }


}
