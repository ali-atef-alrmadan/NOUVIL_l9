<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'office_id',
        'name',
        'age',
        'country',
        'language',
        'Social_status',
        'Experience',
        'religon',
        'worker_photo_path',
        'Available',
        
    ];
}
