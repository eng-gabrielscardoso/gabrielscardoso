<?php

namespace App\Livewire;

use App\Mail\ContactMessage;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
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
            Toaster::warning('Unfortunately our developer does not have enough budget so please wait a day to send a new message');

            return;
        }

        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'next_message_at' => now()->addDay(),
        ]);

        Mail::to(config('mail.from.address'))
            ->send(new ContactMessage($this->name, $this->email, $this->subject, $this->message));

        Toaster::success('Message sent successfully!');

        $this->resetState();
    }

    public function resetState()
    {
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }
}
