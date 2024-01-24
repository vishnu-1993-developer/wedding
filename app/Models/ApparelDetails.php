<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ApparelType;

class ApparelDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        "person_name",
        "relation",
        "gurdian",
        "apparel_types_id",
        "purchased",
        "quantity",
        "description"
    ];

    public function apparelTypes()
    {
        return $this->belongsTo(ApparelType::class,"apparel_types_id","id");
    }
}
