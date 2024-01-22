<?php

namespace App\Filament\Resources\GuestsResource\Widgets;

use Filament\Widgets\ChartWidget;

class CardDeliveredStatus extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
