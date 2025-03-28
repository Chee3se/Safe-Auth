<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /** @use HasFactory<\Database\Factories\LogFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'model',
        'action',
        'old_data',
        'new_data',
        'ip',
    ];
}
