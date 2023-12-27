<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Guests;

class GuestBarati extends ChartWidget
{
    protected static ?string $heading = 'Guest vs Bratai';

    protected function getData(): array
    {
        $totalGuests = Guests::where('active','=',1)->count();
        $barati = Guests::where('active','=',1)->where('include_in_barati','=',1)->count();
        $totalBarati = Guests::where('active','=',1)->where('include_in_barati','=',1)->sum('number_of_people');
        return [
            'datasets'  =>  [
                [
                    "labels"    =>  "Guesting Coming for Barati",
                    "data"      =>  [$totalGuests,$barati],
                    "backgroundColor"   =>  ['blue','green']
                ]
            ],
            "labels"    =>  ["All Guests: ".$totalGuests,"Barati: ".$barati,"Total Barati: ".$totalBarati]
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
