<?php

namespace App\Filament\Widgets;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Widgets\Widget;

class BiographySection extends Widget implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.widgets.biography-section';

    public $biography;

    public function mount(): void
    {
        $this->form->fill([
            'biography' => auth()->user()->biography,
        ]);
    }

    public function saveBiography()
    {
        try {
            $data = $this->form->getState();

            $user = auth()->user();
            $user->biography = $data['biography'];
            $user->save();

            Notification::make()
                ->title('Biography updated successfully')
                ->success()
                ->send();
        } catch (\Exception $e) {
            Notification::make()
                ->title('An error occurred while updating biography')
                ->body($e->getMessage())
                ->danger()
                ->send();
        }
    }

    protected function getFormSchema(): array
    {
        return [
            RichEditor::make('biography')
                ->label('Biography')
                ->toolbarButtons([
                    'bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link',
                ])
                ->columnSpanFull(),
        ];
    }
}
