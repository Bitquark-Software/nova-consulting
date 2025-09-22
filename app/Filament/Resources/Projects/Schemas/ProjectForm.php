<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code'),
                TextInput::make('quote_id')
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('budget')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('spent')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Select::make('status')
                    ->options([
            'planned' => 'Planned',
            'in_progress' => 'In progress',
            'on_hold' => 'On hold',
            'completed' => 'Completed',
            'cancelled' => 'Cancelled',
        ])
                    ->default('planned')
                    ->required(),
                TextInput::make('progress')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
