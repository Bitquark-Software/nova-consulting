<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Nombre del proyecto')
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Estado')
                    ->badge(),
                TextColumn::make('company_name')
                    ->label('Nombre de la empresa')
                    ->searchable(),
                TextColumn::make('user_id')
                    ->label('Cliente ID')
                    ->numeric()
                    ->sortable()
                    ->visible(fn () => Auth::user()->type !== 'customer'),
                TextColumn::make('budget')
                    ->label('Presupuesto')
                    ->numeric(),
                TextColumn::make('budget_used')
                    ->label('Presupuesto usado')
                    ->numeric(),
                TextColumn::make('progress')
                    ->label('Progreso')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Fecha de creación')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Últ. Actualización')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
