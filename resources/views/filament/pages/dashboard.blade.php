<x-filament-panels::page>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold">Welcome, {{ auth()->user()->name }}</h2>
    </div>

    @livewire(\App\Filament\Widgets\GenerateSitemap::class)
</x-filament-panels::page>
