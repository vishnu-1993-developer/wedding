<?php

namespace App\Filament\Resources\ShaadiExpenseResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\ShaadiExpense;
class ExpenseOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make("Total Estimated Cost", \Number::currency(ShaadiExpense::sum("total"),"INR"))
            ->description("Sum of all paid & unpaid budget")
            ->color("danger"),
            Stat::make("Paid By Shailbala", \Number::currency(ShaadiExpense::where("expense_added_by","Shailbala")->sum("total"),"INR"))
            ->description("Sum of all paid & unpaid budget")
            ->color("danger"),
            Stat::make("Paid By Vishnu", \Number::currency(ShaadiExpense::where("expense_added_by","Vishnu")->sum("total"),"INR"))
            ->description("Sum of all paid & unpaid budget")
            ->color("danger"),
            Stat::make("Total Due to Pay", \Number::currency(ShaadiExpense::sum("dues"),"INR"))
            ->description("Sum of all paid & unpaid budget")
            ->color("danger")
        ];
    }
}