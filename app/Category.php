<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id',
        'category_name',
        'image'
    ];

    public function itema()

    {

        return $this->belongsTo(Itema::Class);

    }
}
