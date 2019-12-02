<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model 
{
    protected $fillable = ['title', 'description', 'duedate', 'state'];
}