<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Sitemap
        </x-slot>

        <x-slot name="description">
            Generate and interact with sitemaps
        </x-slot>

        <x-filament::card>
            <div class="flex items-center justify-between gap-2">
                @if (file_exists(public_path('sitemap.xml')))
                    <strong>Sitemap created</strong>
                @else
                    <strong>There's no sitemap active yet</strong>
                @endif

                <x-filament::button color="primary" wire:click="generateSitemap">
                    @if (file_exists(public_path('sitemap.xml')))
                        Generate new sitemap
                    @else
                        Generate Sitemap
                    @endif
                </x-filament::button>
            </div>
        </x-filament::card>
    </x-filament::section>
</x-filament-widgets::widget>
