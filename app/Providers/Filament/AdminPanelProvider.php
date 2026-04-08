<?php

namespace App\Providers\Filament;

use App\Filament\Pages\TaskBoard;
use App\Filament\Resources\Projects\Widgets\BudgetUsageWidget;
use App\Filament\Resources\Projects\Widgets\DraftProjectsWidget;
use App\Filament\Resources\Projects\Widgets\InProgressProjectsWidget;
use Filament\Http\Middleware\Authenticate;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\View\PanelsRenderHook;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Relaticle\Flowforge\FlowforgePlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('dashboard')
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->login()
            ->registration()
            ->colors([
                'primary' => Color::Gray,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
                TaskBoard::class,
            ])
            ->renderHook(
                PanelsRenderHook::HEAD_END,
                function (): string {
                    $path = request()->path();
                    $guestAuthPaths = str_starts_with($path, 'dashboard/login')
                        || str_starts_with($path, 'dashboard/register');
                    $robotsMeta = $guestAuthPaths
                        ? '<meta name="robots" content="noindex, follow">'."\n"
                        : '';

                    $host = strtolower((string) request()->getHost());
                    if (in_array($host, ['localhost', '127.0.0.1', '::1'], true)) {
                        return $robotsMeta;
                    }

                    return $robotsMeta.<<<'HTML'
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "w3wkj1p409");
</script>
HTML;
                }
            )
            ->sidebarWidth('220px')
            ->sidebarFullyCollapsibleOnDesktop()
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                DraftProjectsWidget::class,
                InProgressProjectsWidget::class,
                BudgetUsageWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->plugins([
                FilamentShieldPlugin::make(),
                FlowforgePlugin::make(),
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
