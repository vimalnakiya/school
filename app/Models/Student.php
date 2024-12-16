<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 
        'email_id', 
        'first_name', 
        'last_name', 
        'username', 
        'date_of_birth', 
        'standard', 
        'gender', 
        'admission'
    ];
}
