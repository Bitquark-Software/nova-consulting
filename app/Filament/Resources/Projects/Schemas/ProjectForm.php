<?php

namespace App\Filament\Resources\Projects\Schemas;

use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Nombre del proyecto')
                    ->required(),
                Select::make('status')
                ->label('Estado del proyecto')
                ->disabled(fn () => auth()->user()?->type === 'customer')
                    ->options([
                        'draft' => 'Draft',
                        'accepted' => 'Accepted',
                        'in_progress' => 'In progress',
                        'done' => 'Done',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('draft')
                    ->required(),
                TextInput::make('company_name')
                    ->label('Nombre de la empresa')
                    ->required(),
                Select::make('user_id')
                    ->label('Cliente')
                    ->options(
                        User::where('type', 'customer')
                            ->pluck('name', 'id')
                    )
                    ->searchable()
                    ->visible(fn () => Auth::user()->type !== 'customer')
                    ->required(fn () => Auth::user()->type !== 'customer'),
                TextInput::make('budget')
                    ->label('Presupuesto')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('budget_used')
                    ->required()
                    ->numeric()
                    ->default(0.0)
                    ->visible(fn () => Auth::user()->type !== 'customer'),
                TextInput::make('progress')
                    ->label('Progreso actual') 
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->visible(fn () => Auth::user()->type !== 'customer'),
                Textarea::make('notes')
                    ->label('Notas Adicionales')
                    ->columnSpanFull(),
            ]);
    }
}
