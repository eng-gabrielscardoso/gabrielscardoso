<?php

namespace App\Filament\Resources\VolunteeringResource\Pages;

use App\Filament\Resources\VolunteeringResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVolunteerings extends ListRecords
{
    protected static string $resource = VolunteeringResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
