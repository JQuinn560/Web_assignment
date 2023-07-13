<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    use HasFactory;

   protected $fillable = ['Name', 'Email',  'PhoneNumber', 'StartDate','EndDate','NumberMin5','NumberMax8','WholeNumber','MaxWhole','NumRange','Insta','user_id','picture'];
}