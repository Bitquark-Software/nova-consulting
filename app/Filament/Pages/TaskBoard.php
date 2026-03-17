<?php

namespace App\Filament\Pages;

use App\Models\Tickets;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Relaticle\Flowforge\Board;
use Relaticle\Flowforge\BoardPage;
use Relaticle\Flowforge\Column;

class TaskBoard extends BoardPage
{
    protected static string|null|\BackedEnum $navigationIcon = 'heroicon-o-view-columns';
    protected static ?string $navigationLabel = 'Task Board';
    protected static ?string $title = 'Tickets Board';

    public function board(Board $board): Board
    {
        return $board
            ->query($this->getEloquentQuery())
            ->recordTitleAttribute('title')
            ->columnIdentifier('status')
            ->positionIdentifier('position') // Enable drag-and-drop with position field
            ->columns([
                Column::make('abierto')->label('To Do')->color('gray'),
                Column::make('en_revision')->label('En Revisión')->color('yellow'),
                Column::make('desarrollo')->label('En Desarrollo')->color('blue'),
                Column::make('pruebas')->label('En Pruebas')->color('orange'),
                Column::make('cerrado')->label('Completado')->color('green'),
            ]);
    }

    public function getEloquentQuery(): Builder
    {
        $query = \App\Models\Tickets::query();

        // Restringir al cliente para que solo vea sus tickets en el Kanban
        if (Auth::user()->type === 'customer') {
            $query->where('user_id', auth()->id());
        }

        return $query;
    }
}
