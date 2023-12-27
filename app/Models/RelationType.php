<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationType extends Model
{
    use HasFactory;

    protected $casts = [
        "active"    =>  "boolean"
    ];

    protected $fillable = [
        "relation_type",
        "active"
    ];

    public function guest()
    {
        return $this->hasMany(Guests::class,'relation_type_id','id');
    }
}
