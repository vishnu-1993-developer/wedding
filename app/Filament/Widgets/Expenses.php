<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\ShaadiExpense;

class Expenses extends ChartWidget
{
    protected static ?string $heading = 'Expenses';

    protected function getData(): array
    {
        $totalExpenses = ShaadiExpense::sum('total');
        $advancePaid = ShaadiExpense::sum('advance');
        return [
            'datasets'  =>  [
                [
                    "label"     =>  "Marriage Expenses",
                    "data"      =>  [$totalExpenses,$advancePaid],
                    "backgroundColor"   =>  ["red","green"]
                ]
            ],
            'labels'    =>  ["Total Bill: " . $totalExpenses ,"Advance Paid: ".$advancePaid]
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
