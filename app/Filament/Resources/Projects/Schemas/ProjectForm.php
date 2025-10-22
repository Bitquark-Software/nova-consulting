<?php

namespace App\Filament\Resources\Projects\Schemas;

use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Project Information')
                ->description('Enter the project information')
                ->icon('heroicon-o-briefcase')
                ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('title')
                            ->label('Project Name')
                            ->required(),
                        Select::make('status')
                        ->label('Project Status')
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
                    ]),
                    Grid::make(2)->schema([
                        TextInput::make('company_name')
                            ->label('Company Name')
                            ->required(),
                        Select::make('user_id')
                            ->label('Customer')
                            ->options(
                                User::where('type', 'customer')
                                    ->pluck('name', 'id')
                            )
                            ->searchable()
                            ->visible(fn () => Auth::user()->type !== 'customer')
                            ->required(fn () => Auth::user()->type !== 'customer'),
                    ])
                ]),
                Section::make('Project Budget')
                    ->description('Enter the project budget')
                    ->icon('heroicon-o-currency-dollar')
                    ->collapsible()
                    ->schema([
                        TextInput::make('budget')
                            ->label('Max. Budget')
                            ->required()
                            ->numeric()
                            ->default(0.0),
                        TextInput::make('budget_used')
                            ->label('Used Budget')
                            ->required()
                            ->numeric()
                            ->default(0.0)
                            ->visible(fn () => Auth::user()->type !== 'customer'),
                        TextInput::make('progress')
                            ->label('Current Progress') 
                            ->required()
                            ->numeric()
                            ->default(0)
                            ->visible(fn () => Auth::user()->type !== 'customer'),
                    ]),
                Section::make('Additional Notes')
                    ->description('Enter the project additional notes')
                    ->icon('heroicon-o-document-text')
                    ->collapsible()
                    ->schema([
                        Textarea::make('notes')
                            ->label('Project Notes')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
