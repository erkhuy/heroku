<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'=>'Hạ Huy ',
            'email'=>'admin@admin.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
            'image'=>'->default.jpg',
            'phone'=>'0337172888',
            'gender'=>'1',
            'address'=>'Hà Nội',
        ]);
        factory( \App\Models\User::class, 10)->create();

    }
}
