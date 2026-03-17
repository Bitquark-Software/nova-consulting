<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeUserMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public User $user;
    public ?string $password;

    public function __construct(User $user, ?string $password = null)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function build(): self
    {
        return $this
            ->subject(__('Bienvenido a :name', ['name' => config('app.name')]))
            ->markdown('emails.welcome-user', [
                'user' => $this->user,
                'password' => $this->password,
            ]);
    }
}
