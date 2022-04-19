<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$1J4agClQaWnQPOCTsiTkYO/CveZsY5NO1PbfjCYaCLlyMVyBLHvLK', // 12345678
            'remember_token' => Str::random(10),])->assignRole('admin');;
        User::create([
            'name' => 'Employ',
            'email' => 'employ@employ.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),])->assignRole('employ');;
        User::create([
            'name' => 'Broker',
            'email' => 'broker@broker.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),])->assignRole('broker');
    }
}
