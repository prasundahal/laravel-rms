<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iteam extends Model
{
    protected $fillable = [
        'id',
        'iteam_name',
        'iteam_price',
        'image',
        'iteam_discription',
        'iteam_category',
        'iteam_time'

    ];

    public function category()
    {
        return $this->hasone(Category::Class);
    }
}
