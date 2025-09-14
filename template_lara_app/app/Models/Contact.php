<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\table;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
     "name",
     "email",
     "message"
    ];
}
