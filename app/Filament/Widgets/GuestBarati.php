<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Guests;

class GuestBarati extends ChartWidget
{
    protected static ?int $sort = 3;

    protected static ?string $heading = 'Card Delivered';

    protected function getData(): array
    {
        $totalGuests = Guests::where('active','=',1)->count();
        $barati = Guests::where('active','=',1)->where('card_delivered','=',1)->count();
        return [
            'datasets'  =>  [
                [
                    "labels"    =>  "Cards Delivered",
                    "data"      =>  [$totalGuests,$barati],
                    "backgroundColor"   =>  ['blue','green']
                ]
            ],
            "labels"    =>  ["All Guests: ".$totalGuests,"Card Delivered: ".$barati]
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
