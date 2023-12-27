<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ShaadiExpense;

class ExpenseType extends Model
{
    use HasFactory;

    protected $casts = [
        "active"    =>  "boolean"
    ];

    protected $fillable = [
        "expense_type",
        "active"
    ];

    function shaddiExpenses()
    {
        return $this->hasMany(ShaadiExpense::class,'expense_type_id','id');
    }
}
