<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Reference,AddressCity,Caste,RelationType};

class Guests extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        "active"    =>  "boolean",
        "include_in_barati" => "boolean",
        "number_of_people"  =>  "integer",
        "card_delivered"    =>  "boolean"
    ];

    protected $fillable = [
        "name",
        "address",
        "address_city_id",
        "caste_id",
        "reference_id",
        "active",
        "include_in_barati",
        "number_of_people",
        "card_delivered"
    ];

    public function reference()
    {
        return $this->belongsTo(Reference::class,'reference_id','id');
    }

    public function caste()
    {
        return $this->belongsTo(Caste::class,'caste_id','id');
    }
    

    public function addressCity()
    {
        return $this->belongsTo(AddressCity::class,'address_city_id','id');
    }

    public function relationType()
    {
        return $this->belongsTo(RelationType::class,'relation_type_id','id');
    }

}
