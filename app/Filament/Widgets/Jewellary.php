<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Jewellary as JewellaryModel;

class Jewellary extends ChartWidget
{
    protected static ?string $heading = 'Jewellary Expenses';

    protected function getData(): array
    {
        $estimatedBudget = JewellaryModel::where('purchased','=','0')->sum('estimated_price');
        $purchased = JewellaryModel::where('purchased','=','1')->sum('final_price');
        return [
            "datasets"  =>  [
                [
                    "labels"    =>  "All Jewellaries",
                    "data"      =>  [$estimatedBudget,$purchased],
                    "backgroundColor"   =>  ["red","green"]
                ]
            ],
            "labels"    =>  ["Estimated Budget: " . $estimatedBudget,"Purchased: ".$purchased]
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
