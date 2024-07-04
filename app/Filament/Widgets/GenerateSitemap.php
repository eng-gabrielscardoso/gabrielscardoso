<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Services\SitemapGenerator;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class GenerateSitemap extends Widget
{
    protected static string $view = 'filament.widgets.generate-sitemap';

    public function generateSitemap()
    {
        try {
            $sitemapGenerator = new SitemapGenerator();

            $sitemapGenerator->generate();

            Notification::make()
                ->title('Sitemap generated successfully')
                ->success()
                ->send();
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            Notification::make()
                ->title('An error occurred while generating sitemap')
                ->body($e->getMessage())
                ->danger()
                ->send();
        }
    }
}
