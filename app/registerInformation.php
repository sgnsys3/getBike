<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registerInformation extends Model
{
    protected $fillable = ['regis_code','first_name','last_name','phone_number','email','birthday'];
}
