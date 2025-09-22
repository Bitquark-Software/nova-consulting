<?php

namespace App\Filament\Resources\Quotes\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class QuoteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code'),
                TextInput::make('client_id')
                    ->required()
                    ->numeric(),
                TextInput::make('created_by')
                    ->numeric(),
                TextInput::make('total')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Textarea::make('notes')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['draft' => 'Draft', 'sent' => 'Sent', 'accepted' => 'Accepted', 'rejected' => 'Rejected'])
                    ->default('draft')
                    ->required(),
                DateTimePicker::make('sent_at'),
            ]);
    }
}
