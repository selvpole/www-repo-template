<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //protected $fillable = ['name', 'description'];
    protected $primaryKey = 'name';
    protected $fillable = 'description';
}
