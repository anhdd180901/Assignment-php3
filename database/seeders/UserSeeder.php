<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Đào Duy Anh',
                'email' => 'anhdd180901@gmail.com',
                'password' => 'aloalo123',
            ],
            [
                'name'  => 'Hidepenguin',
                'email' => 'daoduyanhdragon@gmail.com',
                'password' => 'aloalo'
            ]
        ];
        foreach ($data as $item) {
            $user = new User();
            $user->name = $item['name'];
            $user->email = $item['email'];
            $user->password = Hash::make($item['password']);
            $user->save();
        }
    }
}
