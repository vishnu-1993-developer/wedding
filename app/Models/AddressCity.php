<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guests;

class AddressCity extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        "active"    =>  "boolean"
    ];

    protected $fillable = [
        "city_name",
        "active"
    ];

    public function guest()
    {
        return $this->hasMany(Guests::class,'address_city_id','id');
    }
}
