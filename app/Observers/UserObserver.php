<?php

namespace App\Observers;

use App\Mail\WelcomeUserMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserObserver
{
    public function created(User $user): void
    {
        $this->syncRole($user);

        // No enviar desde consola/tests.
        if (app()->runningInConsole() || app()->runningUnitTests()) {
            return;
        }

        // Si hay un usuario autenticado se asume creación desde el sistema (admin/Filament),
        // el correo se envía desde el flujo de creación para incluir la contraseña.
        if (auth()->check()) {
            return;
        }

        Mail::to($user->email)->send(new WelcomeUserMail($user));
    }

    public function updated(User $user): void
    {
        // Solo sincroniza si se cambió el type
        if ($user->isDirty('type')) {
            $this->syncRole($user);
        }
    }

    protected function syncRole(User $user): void
    {
        // Limpiar roles previos
        $user->syncRoles([]);

        // Asignar rol según el type
        switch ($user->type) {
            case 'super_admin':
                $user->assignRole('super_admin');
                break;
            case 'employee':
                $user->assignRole('Employee');
                break;
            case 'customer':
                $user->assignRole('Customer');
                break;
        }
    }
}
