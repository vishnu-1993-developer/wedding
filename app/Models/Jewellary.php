<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jewellary extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "estimated_price",
        "final_price",
        "purchased",
        "store_name",
        "receipt"
    ];

    protected $casts = [
        "purchased"     =>  "boolean"
    ];
}
