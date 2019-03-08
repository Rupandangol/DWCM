<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';
    protected $fillable = [
        'name',
        'detail',
        'image',
        'category_id'
    ];

    public function getCategory()
    {
        return $this->hasOne(
          'App\Model\Category',
          'id',
          'category_id'
        );
    }


}
