<?php
// namespace Database\Seeds;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = ['Role 3 data', 'Role 10 data', 'Role all data'];

    	foreach ($data as $row) {
            $check = Role::where('role_name', $row)->first();
            if (! $check) {
                Role::create([
                    'role_name' => $row,
                ]);
            }
    	}

    }
}
