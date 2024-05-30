<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
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
        $admin = Role::where('slug','administrator')->first();
        $createUser = Permission::where('slug','manage-users')->first();
        $createProducts= Permission::where('slug','create-products')->first();
        $user1 = new User();
        $user1->name = 'Администратор сайта';
        $user1->email = 'test@test.test';
        $user1->password = bcrypt('secret');
        $user1->save();

        $user1->roles()->attach($admin);
        $user1->permissions()->attach($createUser);
        $user1->permissions()->attach($createProducts);
    }
}
