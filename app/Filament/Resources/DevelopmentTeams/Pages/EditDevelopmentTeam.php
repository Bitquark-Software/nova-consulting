<?php

namespace App\Filament\Resources\DevelopmentTeams\Pages;

use App\Filament\Resources\DevelopmentTeams\DevelopmentTeamResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDevelopmentTeam extends EditRecord
{
    protected static string $resource = DevelopmentTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
