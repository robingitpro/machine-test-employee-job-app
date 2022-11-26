<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    protected $table = 'candidates';
    use HasFactory;
    protected $filltable = [
        'jobs_id',
        'name',
        'email',
        'phone',
        'resume',
    ];
}