<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_image',
        'user_email',
        'user_contact',
        'overview',
        'role_type',
        'role_id',
    ];

    public function roleable()
    {
        return $this->morphTo();
    }
}
