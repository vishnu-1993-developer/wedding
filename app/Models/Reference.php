<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guests;

class Reference extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        "active"    =>  "boolean"
    ];

    protected $fillable = [
        "name",
        "active"
    ];

    public function guest()
    {
        return $this->hasMany(Guests::class,'address_city_id','id');
    }
}
