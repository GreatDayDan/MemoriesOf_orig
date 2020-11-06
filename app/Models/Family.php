<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'familyname',
        'description',
        'userid',
        'eventid',
        'postsid',
        'updated_on',
        'created_on'
    ];
}
