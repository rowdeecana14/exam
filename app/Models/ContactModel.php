<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'name', 'company', 'phone', 'email', 'user_id'
    ];
}
