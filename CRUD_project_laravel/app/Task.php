<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //забросить множество данных в БД
    protected $fillable = ['title', 'description'];
}
