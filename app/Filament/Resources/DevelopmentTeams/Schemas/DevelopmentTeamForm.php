<?php

namespace App\Filament\Resources\DevelopmentTeams\Schemas;

use App\Models\User;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class DevelopmentTeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make()
                ->columns(1)
                ->steps([
                    Wizard\Step::make('Project Type')
                    ->icon('heroicon-o-briefcase')
                    ->label('Project Type')
                    ->schema([
                        Select::make('project_type')
                            ->label('What kind of project needs our support?')
                            ->options([
                                'legacy' => 'Legacy to modern code migration',
                                'web' => 'Web Development',
                                'app' => 'App Development',
                                'deadline' => 'Deadline Support',
                                'mvp' => 'MVP Support',
                            ])
                            ->required()
                            ->reactive(),
                    ]),
                    Wizard\Step::make('Timeline')
                        ->icon('heroicon-o-calendar-days')
                        ->schema([
                            Select::make('start_time')
                                ->label('When do you want to start?')
                                ->options([
                                    'now' => 'Now',
                                    'next_week' => 'Next Week',
                                    'next_month' => 'Next Month',
                                ])
                                ->required(),
                        ]),
                    Wizard\Step::make('Team Composition')
                    ->icon('heroicon-o-users')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('product_owners')
                                ->numeric()
                                ->label('Product Owners ($25/hr)')
                                ->suffixIconColor('warning')
                                ->default(0)
                                ->minValue(0)
                                ->maxValue(3)
                                ->rules(['numeric', 'min:0'])
                                ->live(onBlur: true)
                                ->suffixIcon('heroicon-s-user')
                                ->reactive(),
                            TextInput::make('senior_devs')
                                ->numeric()
                                ->label('Senior Developers ($60/hr)')
                                ->suffixIcon('heroicon-s-star')
                                ->suffixIconColor('warning')
                                ->default(0)
                                ->minValue(0)
                                ->maxValue(10)
                                ->rules(['numeric', 'min:0'])
                                ->live(onBlur: true)
                                ->reactive(),
                            TextInput::make('junior_devs')
                                ->numeric()
                                ->label('Junior Developers ($30/hr)')
                                ->suffixIcon('heroicon-s-face-smile')
                                ->suffixIconColor('warning')
                                ->default(0)
                                ->minValue(0)
                                ->maxValue(10)
                                ->rules(['numeric', 'min:0'])
                                ->live(onBlur: true)
                                ->reactive(),
                            TextInput::make('qa_testers')
                                ->numeric()
                                ->label('QA Testers ($25/hr)')
                                ->suffixIcon('heroicon-s-bug-ant')
                                ->suffixIconColor('warning')
                                ->default(0)
                                ->minValue(0)
                                ->maxValue(5)
                                ->rules(['numeric', 'min:0'])
                                ->live(onBlur: true)
                                ->reactive(),
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
                ]),
            Section::make('Summary')
            ->schema([
                Placeholder::make('summary')
                    ->label('Summary')
                    ->content(fn ($get) => "You selected a {$get('project_type')} project, starting {$get('start_time')} with an estimated budget of $" .
                        number_format(
                            (
                                max(0, $get('product_owners')) * 25 +
                                max(0, $get('senior_devs')) * 60 +
                                max(0, $get('junior_devs')) * 30 +
                                max(0, $get('qa_testers')) * 25
                            ) * 8,
                            2
                        ) . " USD/day"
                    )
                    ->visible(fn ($get) => $get('project_type') !== null && $get('start_time') !== null)
                    ->reactive(),
            ])
        ]);
    }
}
