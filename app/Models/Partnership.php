<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'sector',
        'city',
        'contact_name',
        'contact_email',
        'contact_phone',
        'message',
        'status',
    ];
}
