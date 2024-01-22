<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ApparelDetails;
use Illuminate\Database\Eloquent\casts\Attribute;

class ApparelType extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "age_group",
        "min_budget",
        "max_budget",
        "gender"
    ];
    
    public function apparelDetails()
    {
        return $this->hasMany(ApparelDetails::class,"apparel_types_id","id");
    }

    public function nameWithDetails()
    {
        return $this->name . " for " . $this->min_budget . "-" . $this->max_budget;
    }

    // protected function name(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn(string $value) =>   ucfirst($value) ."Tester",
    //     );
    // }
}
