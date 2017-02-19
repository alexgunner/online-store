<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //fields of the table (could add more)
    protected $fillable = [
      'name',
      'email',
      'title',
      'price',
      'saleby',
      'description',
      'location',
      'image'
    ];

    public $timestamps = false;


    protected $table = 'products'; //replace with table name
}
