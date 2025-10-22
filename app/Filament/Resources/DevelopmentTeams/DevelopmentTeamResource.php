<?php

namespace App\Filament\Resources\DevelopmentTeams;

use App\Filament\Resources\DevelopmentTeams\Pages\CreateDevelopmentTeam;
use App\Filament\Resources\DevelopmentTeams\Pages\EditDevelopmentTeam;
use App\Filament\Resources\DevelopmentTeams\Pages\ListDevelopmentTeams;
use App\Filament\Resources\DevelopmentTeams\Schemas\DevelopmentTeamForm;
use App\Filament\Resources\DevelopmentTeams\Tables\DevelopmentTeamsTable;
use App\Models\DevelopmentTeam;
use App\Models\DevelopmentTeams;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class DevelopmentTeamResource extends Resource
{
    protected static ?string $model = DevelopmentTeams::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?string $label = "Dev Team";

    protected static ?string $pluralLabel = 'Dev Teams';

    protected static ?string $recordTitleAttribute = 'developmentTeam';

    public static function form(Schema $schema): Schema
    {
        return DevelopmentTeamForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DevelopmentTeamsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDevelopmentTeams::route('/'),
            'create' => CreateDevelopmentTeam::route('/create'),
            'edit' => EditDevelopmentTeam::route('/{record}/edit'),
        ];
    }

    protected static function mutateFormDataBeforeCreate(array $data): array
    {
        if (Auth::user()->type === 'customer') {
            $data['user_id'] = Auth::id();
        }

        // por si el usuario se pasa de verdura y logra modificar el select
        $data['status'] = 'draft';

        return $data;
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (Auth::check() && Auth::user()->type === 'customer') {
            $query->where('user_id', Auth::id());
        }

        return $query;
    }
}
