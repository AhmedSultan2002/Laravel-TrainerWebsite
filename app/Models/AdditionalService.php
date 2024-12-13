<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Day;


class AdditionalService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'time',
        'day',
    ];

    protected $casts = [
        'day' => Day::class,
    ];
}
