<?php

namespace App\Filament\Resources\Projects\Widgets;

use App\Models\Project;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\Auth;

class BudgetUsageWidget extends ChartWidget
{
    protected ?string $heading = 'Budget Usage';

    protected int|string|array $columnSpan = [
        'default' => 1,
        'md' => 2,
        'xl' => 1,
    ];

    public static function canView(): bool
    {
        return Auth::check() && Auth::user()->type === 'customer';
    }

    protected function getData(): array
    {
        $userId = Auth::id();

        $totalBudget = Project::where('status', 'in_progress')
            ->where('user_id', $userId)
            ->sum('budget');

        $usedBudget = Project::where('status', 'in_progress')
            ->where('user_id', $userId)
            ->sum('budget_used');

        $availableBudget = $totalBudget - $usedBudget;

        return [
            'datasets' => [
                [
                    'label' => 'Budget',
                    'data' => [$availableBudget, $usedBudget],
                    'backgroundColor' => ['#22c55e', '#ef4444'], // verde y rojo
                ],
            ],
            'labels' => ['Available', 'Used'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
