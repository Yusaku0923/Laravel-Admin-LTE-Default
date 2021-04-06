<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::query()->create([
            'name' => 'Yusaku',
            'email' => 'sksk14@icloud.com',
            'password' => \Illuminate\Support\Facades\Hash::make('happyspiral')
        ]);
    }
}
