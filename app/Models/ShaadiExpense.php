<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExpenseType;

class ShaadiExpense extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "total",
        "advance",
        "dues",
        "paid_person",
        "contact_no",
        "comment",
        "fully_paid",
        "expense_added_by"
    ];

    public function expenseTypes()
    {
        return $this->belongsTo(ExpenseType::class,'expense_type_id','id');
    }
}
