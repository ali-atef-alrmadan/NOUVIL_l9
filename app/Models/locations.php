<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locations extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'city',
        'address_description',
        
    ];

    public function Office()
    {
        return $this->belongsTo(Office::class, "id", "location_id");
    }
}
