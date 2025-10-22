<?php

namespace App\Filament\Resources\DevelopmentTeams\Pages;

use App\Filament\Resources\DevelopmentTeams\DevelopmentTeamResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDevelopmentTeams extends ListRecords
{
    protected static string $resource = DevelopmentTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
