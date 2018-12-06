<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //untuk menginput data secara massal
    protected $fillable = ['name', 'email','photo'];
}
