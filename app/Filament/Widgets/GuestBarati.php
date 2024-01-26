<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Guests;

class GuestBarati extends ChartWidget
{
    protected static ?int $sort = 5;

    protected static ?string $heading = 'Card Delivered';

    protected function getData(): array
    {
        $totalGuests = Guests::where('active','=',1)->count();
        $cardsNotDelievered = Guests::where('active','=',1)->where('card_delivered','=',0)->count();
        $cardDelievered = Guests::where('active','=',1)->where('card_delivered','=',1)->count();
        return [
            'datasets'  =>  [
                [
                    "labels"    =>  "Cards Delivered Status",
                    "data"      =>  [$cardsNotDelievered,$cardDelievered],
                    "backgroundColor"   =>  ['blue','green']
                ]
            ],
            "labels"    =>  ["Total Guests: ".$totalGuests,"Un-Delievered: ".$cardsNotDelievered,"Delivered: ".$cardDelievered]
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
