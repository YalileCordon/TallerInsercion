<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;
    protected $fillable = [
        'business_name',   
        'nit',
        'verification_digit',
        'corporate_email', 
        'city', 
        'address', 
        'number_employees',
        'registration_Date',
        'exporter'
    ];
}
