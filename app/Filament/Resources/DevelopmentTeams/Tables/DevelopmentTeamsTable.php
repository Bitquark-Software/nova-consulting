<?php

namespace App\Filament\Resources\DevelopmentTeams\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class DevelopmentTeamsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('project_type')
                    ->label('Project Type'),
                TextColumn::make('product_owners')
                    ->badge()
                    ->label('Product Owners'),
                TextColumn::make('senior_devs')
                    ->badge()
                    ->label('Senior Devs'),
                TextColumn::make('junior_devs')
                    ->badge()
                    ->label('Junior Devs'),
                TextColumn::make('qa_testers')
                    ->badge()
                    ->label('QA Testers'),
                TextColumn::make('customer.name')
                    ->label('Customer')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('estimated_budget')
                    ->label('Budget'),
                TextColumn::make('start_time')
                    ->label('Start Time'),
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
