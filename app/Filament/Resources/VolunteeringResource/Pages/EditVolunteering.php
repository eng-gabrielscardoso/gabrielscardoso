<?php

namespace App\Filament\Resources\VolunteeringResource\Pages;

use App\Filament\Resources\VolunteeringResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVolunteering extends EditRecord
{
    protected static string $resource = VolunteeringResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
