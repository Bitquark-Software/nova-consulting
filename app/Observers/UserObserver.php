<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    public function created(User $user): void
    {
        $this->syncRole($user);
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
