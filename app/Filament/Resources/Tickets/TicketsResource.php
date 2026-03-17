<?php

namespace App\Filament\Resources\Tickets;

use App\Filament\Resources\Tickets\Pages\CreateTickets;
use App\Filament\Resources\Tickets\Pages\EditTickets;
use App\Filament\Resources\Tickets\Pages\ListTickets;
use App\Filament\Resources\Tickets\Schemas\TicketsForm;
use App\Filament\Resources\Tickets\Tables\TicketsTable;
use App\Models\Tickets;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class TicketsResource extends Resource
{
    protected static ?string $model = Tickets::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-ticket';

    protected static ?string $recordTitleAttribute = 'Ticket';

    public static function form(Schema $schema): Schema
    {
        return TicketsForm::configure($schema)->columns(1);
    }

    public static function table(Table $table): Table
    {
        return TicketsTable::configure($table);
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        // Si el usuario NO es super_admin (o no tiene permiso total), filtramos
        if (Auth::user()->type === 'customer') {
            return $query->where('user_id', auth()->id());
        }

        return $query;
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
            'index' => ListTickets::route('/'),
            'create' => CreateTickets::route('/create'),
            'edit' => EditTickets::route('/{record}/edit'),
        ];
    }
}
