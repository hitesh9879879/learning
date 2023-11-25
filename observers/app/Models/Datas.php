<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datas extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_image',
        'user_email',
        'user_contact',
        'overview'
        ];
}
