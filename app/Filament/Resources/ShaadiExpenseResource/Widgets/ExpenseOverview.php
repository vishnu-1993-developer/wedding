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
            ->color("danger")
        ];
    }
}
