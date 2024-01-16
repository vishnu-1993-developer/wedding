<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reference;

class TodoTask extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "assigned_to",
        "assigned_date",
        "due_date",
        "status",
        "priority",
    ];

    public function assignedTo()
    {
        return $this->belongsTo(Reference::class,"assigned_to","id");
    }
}
