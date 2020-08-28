<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //
    protected $table = 'guests';
    protected $fillable = ['first_name', 'last_name', 'member_since'];
}