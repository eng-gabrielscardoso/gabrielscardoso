<?php

namespace App\Livewire;

use App\Models\Message;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

#[Title('Contact')]
class Contact extends Component
{
    #[Validate('required|min:3|max:255')]
    public string $name = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|min:3|max:255')]
    public string $subject = '';

    #[Validate('required|min:10|max:500')]
    public string $message = '';

    public function render()
    {
        return view('contact');
    }

    public function sendMessage()
    {
        $this->validate();

        $performer = Message::where('email', $this->email)->first();

        if (isset($performer) && $performer->next_message_at > now()) {
            Toaster::warning('Calm down champs, wait a little to send a new message.');

            return;
        }

        try {
            Message::create([
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'message' => $this->message,
                'next_message_at' => now()->addHour(),
            ]);

            Toaster::success('Message sent successfully!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Toaster::error('Some error occurred during message sending. Try again later.');
        } finally {
            $this->resetState();
        }
    }

    public function resetState()
    {
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }
}
