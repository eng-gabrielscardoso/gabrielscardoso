<x-filament-panels::page>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Welcome, {{ auth()->user()->name }}</h2>
    </div>

    @livewire(\App\Filament\Widgets\GenerateSitemap::class)
</x-filament-panels::page>
