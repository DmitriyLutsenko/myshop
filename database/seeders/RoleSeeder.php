<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = new Role();
        $manager->name = 'Менеджер заказов';
        $manager->slug = 'order-manager';
        $manager->save();

        $developer = new Role();
        $developer->name = 'Администратор';
        $developer->slug = 'administrator';
        $developer->save();
    }
}
