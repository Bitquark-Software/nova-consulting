<?php

namespace App\Filament\Resources\Projects\Widgets;

use App\Models\Project;
use Filament\Support\Colors\Color;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class DraftProjectsWidget extends StatsOverviewWidget
{
    public static function canView(): bool
    {
        return Auth::check() && Auth::user()->type === 'super_admin';
    }

    protected int | null | array $columns = [
        'default' => 1,
        'md' => 2,
        'xl' => 2,
    ];

    protected function getStats(): array
    {
        return [
            Stat::make('Draft Projects', Project::where('status', 'draft')->count())
            ->description('Quotations')
            ->color('gray')
            ->icon('heroicon-o-document'),
            Stat::make('Active Projects', Project::where('status', 'in_progress')->count())
            ->description('In progress projects')
            ->color(Color::Green)
            ->icon('heroicon-o-arrow-path'),
        ];
    }
}
