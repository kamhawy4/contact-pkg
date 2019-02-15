<?php

namespace Abdo\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
    protected  $table   = 'contacts';

    protected $fillable = [
        'message', 'email', 'name'
    ];
}
