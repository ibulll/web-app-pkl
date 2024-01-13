<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('12345')
        ]);
        $admin->assignRole('admin');

        $siswa = User::create([
            'name' => 'siswa',
            'email' => 'siswa@email.com',
            'password' => bcrypt('12345')
        ]);
        $siswa->assignRole('siswa');

        $kaprog = User::create([
            'name' => 'kaprog',
            'email' => 'kaprog@email.com',
            'password' => bcrypt('12345')
        ]);
        $kaprog->assignRole('kaprog');

        $toolman = User::create([
            'name' => 'toolman',
            'email' => 'toolman@email.com',
            'password' => bcrypt('12345')
        ]);
        $toolman->assignRole('toolman');
        
        $wakahubin = User::create([
            'name' => 'wakahubin',
            'email' => 'wakahubin@email.com',
            'password' => bcrypt('12345')
        ]);
        $wakahubin->assignRole('wakahubin');

        $pembimbing = User::create([
            'name' => 'pembimbing',
            'email' => 'pembimbing@email.com',
            'password' => bcrypt('12345')
        ]);
        $pembimbing->assignRole('pembimbing');
}
}