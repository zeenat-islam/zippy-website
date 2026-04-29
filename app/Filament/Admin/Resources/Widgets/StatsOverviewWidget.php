<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Blogs', \App\Models\Blog::count())
                ->description('Published blogs')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->icon('heroicon-o-document-text'),

            Stat::make('Contacts', \App\Models\ContactMessage::count())
                ->description('Messages received')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('warning')
                ->icon('heroicon-o-envelope'),

            Stat::make('Portfolios', \App\Models\Portfolio::count())
                ->description('Active projects')
                ->descriptionIcon('heroicon-m-photo')
                ->color('info')
                ->icon('heroicon-o-photo'),

            Stat::make('Team Members', \App\Models\TeamMember::count())
                ->description('Active members')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary')
                ->icon('heroicon-o-users'),
        ];
    }
}