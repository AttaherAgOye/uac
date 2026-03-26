<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class SiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Paramètres du site';
    protected static ?string $title = 'Paramètres du site';
    protected static ?string $slug = 'site-settings';
    protected static ?int $navigationSort = 99;

    protected string $view = 'filament.pages.site-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'site_theme' => Setting::getTheme(),
        ]);
    }

    public function form(Schema $form): Schema
    {
        return $form
            ->components([
                Section::make('Apparence')
                    ->description('Personnalisez le thème visuel du site public.')
                    ->schema([
                        Select::make('site_theme')
                            ->label('Thème du site')
                            ->options([
                                'green' => '🟢 Vert (par défaut)',
                                'brown' => '🟤 Marron',
                            ])
                            ->default('green')
                            ->required()
                            ->native(false),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        Setting::set('site_theme', $data['site_theme']);

        Notification::make()
            ->title('Paramètres enregistrés')
            ->body('Le thème du site a été mis à jour.')
            ->success()
            ->send();
    }
}
