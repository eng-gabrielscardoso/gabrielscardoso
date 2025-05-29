<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Biography
        </x-slot>

        <x-slot name="description">
            Update your personal biography.
        </x-slot>

        <form wire:submit.prevent="saveBiography" class="space-y-4">
            {{ $this->form }}

            <x-filament::button type="submit" color="primary">
                Save
            </x-filament::button>
        </form>
    </x-filament::section>
</x-filament-widgets::widget>
