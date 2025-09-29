<?php

namespace App\Filament\Resources\Projects\Widgets;

use App\Models\Project;
use Filament\Support\Colors\Color;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class InProgressProjectsWidget extends StatsOverviewWidget
{
    public static function canView(): bool
    {
        return Auth::check() && Auth::user()->type === 'customer';
    }

    protected int | null | array $columns = [
        'default' => 1,
        'md' => 2,
        'xl' => 2,
    ];

    protected function getStats(): array
    {
        return [
            Stat::make('Qutes', Project::where([
                ['status', 'draft'],
                ['user_id', Auth::user()->id],
            ])->count())
            ->description('Drafts')
            ->color('gray')
            ->icon('heroicon-o-document'),
            Stat::make('Active Projects', Project::where([
                ['status', 'in_progress'],
                ['user_id', Auth::user()->id],
            ])->count())
            ->description('Active Projects')
            ->color(Color::Green)
            ->icon('heroicon-o-arrow-path'),
        ];
    }
}
