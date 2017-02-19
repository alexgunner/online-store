<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    //fields of the table (could add more)
    protected $fillable = [
      'message',
      'receiver_id',
      'sender_id'
    ];

    public $timestamps = false;


    protected $table = 'messages'; //replace with table name
}