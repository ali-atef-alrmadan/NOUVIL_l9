<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'location_id',
        'name',
        'email',
        'phone_number',
        'description',
    ];
    public function Employee()
    {
        return $this->belongsTo(Employee::class, "id", "office_id");
    }

}
