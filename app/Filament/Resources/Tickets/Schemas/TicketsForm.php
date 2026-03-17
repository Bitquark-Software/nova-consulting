<?php

namespace App\Filament\Resources\Tickets\Schemas;

use App\Enums\TicketStatus;
use App\Models\User;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class TicketsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                    ->schema([
                        
                        // Columna Izquierda: Datos principales (Ocupa 2/3)
                        Section::make('Información del Ticket')
                            ->description('Detalla el problema o requerimiento técnico.')
                            ->columnSpan(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Asunto / Título')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Ej: Error al procesar pago en checkout')
                                    ->columnSpanFull(),

                                RichEditor::make('description')
                                    ->label('Descripción Detallada')
                                    ->required()
                                    ->toolbarButtons([
                                        'attachFiles', 'blockquote', 'bold', 'bulletList', 
                                        'codeBlock', 'h2', 'h3', 'italic', 'link', 'orderedList', 'redo', 'undo',
                                    ])
                                    ->columnSpanFull()
                                    // Esto asegura que el editor tenga un área de escritura amplia
                                    ->extraInputAttributes(['style' => 'min-height: 400px;']), 
                            ]),

                        // Columna Derecha: Metadatos y Asignación (Ocupa 1/3)
                        Section::make('Clasificación y Asignación')
                            ->columnSpan(1)
                            ->schema([
                                Select::make('status')
                                    ->label('Estado Actual')
                                    // Usamos el Enum que creamos antes
                                    ->options(TicketStatus::class)
                                    ->default('abierto')
                                    ->required()
                                    ->disabled(Auth::user()->type === 'customer')
                                    ->dehydrated()
                                    ->native(false),

                                Select::make('priority')
                                    ->label('Prioridad')
                                    ->options([
                                        'baja' => 'Baja',
                                        'media' => 'Media',
                                        'alta' => 'Alta',
                                        'critica' => 'Crítica',
                                    ])
                                    ->default('media')
                                    ->disabled(Auth::user()->type === 'customer')
                                    ->dehydrated()
                                    ->required()
                                    ->native(false),

                                Select::make('assigned_to_id')
                                    ->label('Técnico Responsable')
                                    ->relationship('assignedTo', 'name')
                                    ->searchable()
                                    ->hidden(fn () => auth()->user()->type === 'customer')
                                    ->preload()
                                    ->placeholder('Seleccionar empleado...')
                                    ->default(function () {
                                        if (auth()->user()->type === 'customer') {
                                            return User::where('type', 'employee')->orWhere('type', 'super_admin')->first()?->id;
                                        }
                                        return null;
                                    })
                                    ->dehydrated(true),

                                Select::make('user_id')
                                    ->label('Cliente')
                                    ->relationship('client', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->default(auth()->id())
                                    ->disabled(Auth::user()->type === 'customer')
                                    ->dehydrated()
                                    ->required(),

                                Placeholder::make('created_at')
                                    ->label('Fecha de creación')
                                    ->content(fn ($record) => $record?->created_at?->diffForHumans() ?? 'Nuevo ticket'),
                            ]),
                    ]),
            ]);
    }
}
