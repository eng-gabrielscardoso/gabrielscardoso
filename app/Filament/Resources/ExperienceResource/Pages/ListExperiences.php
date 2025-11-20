<?php

namespace App\Filament\Resources\ExperienceResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\ExperienceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExperiences extends ListRecords
{
    protected static string $resource = ExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
