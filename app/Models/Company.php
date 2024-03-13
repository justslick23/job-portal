<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'website',
        'contact_number',
        'email',
        'industry',
        'country',
        'city',
        'company_size',
        'description',
        'date_founded',
    ];

    // Define relationships or other methods here

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
