<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewSubject extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'subject_code',
        'description'
    ];
}
