<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->disabled()
                    ->default(Str::random(8))
                    ->required()
                    ->dehydrated(true),
                Select::make('type')
                    ->options(['super_admin' => 'Super admin', 'employee' => 'Employee', 'customer' => 'Customer'])
                    ->default('customer')
                    ->required(),
            ]);
    }
}
