<?php
// namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
                'name' => 'User 3',
                'email' => 'user3@gmail.com',
                'role_id' => 1,
            ],
            [
                'name' => 'User 10',
                'email' => 'user10@gmail.com',
                'role_id' => 2,
            ],
            [
                'name' => 'User all',
                'email' => 'userall@gmail.com',
                'role_id' => 3,
            ]
        ];

    	foreach ($data as $row) {
            $check = User::where('name', $row['name'])->first();
            if (! $check) {
                User::create([
                    'name' => $row['name'],
                    'email' => $row['email'],
                    'role_id' => $row['role_id'],
                    'password' => Hash::make(12345678)
                ]);
            }
    	}

    }
}
