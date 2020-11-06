<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventmo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'eventname',
        'description',
        'userid',
        'familyid',
        'postsid',
        'updated_on',
        'created_on'
    ];
}
