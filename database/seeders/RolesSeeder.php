<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'employee']);
        Role::firstOrCreate(['name' => 'customer']);

        // Crear admin inicial (ajusta email/password)
        $admin = User::where('email', 'idsfernandomorales@gmail.com')->first();
        var_dump($admin);
        if($admin) {
            $admin->assignRole('admin');
        }
    }
}
