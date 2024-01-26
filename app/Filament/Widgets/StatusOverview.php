<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\{Guests,ShaadiExpense,TodoTask};

class StatusOverview extends BaseWidget
{

    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make("Total Guests", Guests::where("active",1)->count())
            ->description("Increase in guests")
            ->descriptionIcon("heroicon-m-arrow-trending-up")
            ->color("success"),
            Stat::make("Total Estimated Cost", \Number::currency(ShaadiExpense::sum("total"),"INR"))
            ->description("Sum of all paid & unpaid budget")
            ->color("danger"),
            Stat::make("Pending Tasks",TodoTask::whereIn("status",["ready","in_progress","pending","overdue"])->count())
            ->description("All pending & in progress tasks")
            ->color("info")
        ];
    }
}
