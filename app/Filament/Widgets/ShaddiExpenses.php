<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\ShaadiExpense;

class ShaddiExpenses extends ChartWidget
{
    protected static ?int $sort = 2;

    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $allExpenses = ShaadiExpense::pluck("name","total")->toArray();
        $expenseValues = array_keys($allExpenses);
        $expenseNames = array_values($allExpenses);
        return [
            "datasets"  =>  [
                [
                    "label"    =>  "All shaddi expenses",
                    "data"      =>  $expenseValues
                ]
            ],
            "labels"    =>  $expenseNames
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
