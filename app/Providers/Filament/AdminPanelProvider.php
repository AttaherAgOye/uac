<?php

namespace App\Providers\Filament;

use App\Filament\Widgets\AdminOverview;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\Width;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\HtmlString;
use Filament\Widgets\AccountWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $primaryColor = Color::Emerald;
        
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
                $theme = \App\Models\Setting::getTheme();
                if ($theme === 'brown') {
                    $primaryColor = \Filament\Support\Colors\Color::hex('#5D4037');
                }
            }
        } catch (\Throwable $e) {}

        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->login()
            ->brandName('UAC-IOD Admin')
            ->brandLogoHeight('2.25rem')
            ->sidebarCollapsibleOnDesktop()
            ->maxContentWidth(Width::Full)
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Zinc,
                'info' => Color::Blue,
                'primary' => $primaryColor,
                'success' => Color::Emerald,
                'warning' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AdminOverview::class,
                AccountWidget::class,
            ])
            ->renderHook(
                PanelsRenderHook::HEAD_END,
                fn (): string => (function () {
                    $theme = 'green';
                    try {
                        if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
                            $theme = \App\Models\Setting::getTheme();
                        }
                    } catch (\Throwable $e) {}

                    if ($theme === 'brown') {
                        return new HtmlString('
                            <style>
                                :root {
                                    --uac-admin-sidebar: linear-gradient(180deg, #3E2723 0%, #4E342E 52%, #5D4037 100%);
                                    --uac-admin-accent: linear-gradient(135deg, #5D4037 0%, #795548 55%, #f9a825 100%);
                                }
                                body {
                                    background:
                                        radial-gradient(circle at top left, rgba(93, 64, 55, 0.12), transparent 32%),
                                        radial-gradient(circle at bottom right, rgba(249, 168, 37, 0.12), transparent 28%),
                                        var(--uac-admin-bg);
                                }
                            </style>
                        ');
                    }
                    return new HtmlString('');
                })()
            )
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
