<?php

namespace App\Filament\Widgets;

use App\Models\ContactMessage;
use App\Models\JobApplication;
use App\Models\JobOffer;
use App\Models\Partnership;
use App\Models\Post;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminOverview extends StatsOverviewWidget
{
    protected ?string $heading = 'Vue d\'ensemble';

    protected ?string $description = 'Suivez en un coup d\'œil les contenus publiés, les opportunités RH et les demandes à traiter.';

    protected function getStats(): array
    {
        $publishedPosts = Post::published()->count();
        $activeOffers = JobOffer::active()->count();
        $unreadMessages = ContactMessage::query()->where('is_read', false)->count();
        $pendingItems = JobApplication::query()->where('status', 'pending')->count()
            + Partnership::query()->where('status', 'pending')->count();

        return [
            Stat::make('Articles publiés', $publishedPosts)
                ->description('Contenus visibles sur le site')
                ->descriptionIcon('heroicon-m-newspaper', IconPosition::Before)
                ->color('primary')
                ->chart([2, 3, 3, 4, 5, 6, 6]),
            Stat::make('Offres actives', $activeOffers)
                ->description('Postes actuellement ouverts')
                ->descriptionIcon('heroicon-m-briefcase', IconPosition::Before)
                ->color('success')
                ->chart([1, 2, 2, 3, 2, 4, 4]),
            Stat::make('Messages non lus', $unreadMessages)
                ->description('Contacts en attente de lecture')
                ->descriptionIcon('heroicon-m-envelope', IconPosition::Before)
                ->color('warning')
                ->chart([6, 5, 4, 6, 5, 4, 3]),
            Stat::make('Demandes à traiter', $pendingItems)
                ->description('Candidatures + partenariats en attente')
                ->descriptionIcon('heroicon-m-inbox-stack', IconPosition::Before)
                ->color('info')
                ->chart([1, 2, 1, 3, 2, 4, 3]),
        ];
    }
}
