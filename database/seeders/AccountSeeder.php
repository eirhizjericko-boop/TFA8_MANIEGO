<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['full_name' => 'Mia Santos', 'email' => 'mia.santos@example.test', 'phone' => '0917-201-4401', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Eli Navarro', 'email' => 'eli.navarro@example.test', 'phone' => '0917-201-4402', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Cora Mendoza', 'email' => 'cora.mendoza@example.test', 'phone' => '0917-201-4403', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Jules Rivera', 'email' => 'jules.rivera@example.test', 'phone' => '0917-201-4404', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Noah Villanueva', 'email' => 'noah.villanueva@example.test', 'phone' => '0917-201-4405', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('users')->insert([
            ['username' => 'ari.cruz', 'full_name' => 'Ari Cruz', 'email' => 'ari.cruz@example.test', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'bea.lim', 'full_name' => 'Bea Lim', 'email' => 'bea.lim@example.test', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'ken.flores', 'full_name' => 'Ken Flores', 'email' => 'ken.flores@example.test', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'lia.ramos', 'full_name' => 'Lia Ramos', 'email' => 'lia.ramos@example.test', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'sam.dizon', 'full_name' => 'Sam Dizon', 'email' => 'sam.dizon@example.test', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
