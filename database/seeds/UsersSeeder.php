<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "admin";
        $adminRole->save();

        //membuat role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "member";
        $memberRole->save();

        //membuat sample admin
        $admin = new user();
        $admin->name = "admin";
        $admin->email = "admin@gmail.com";
        $admin->password =bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat sample member
        $admin = new user();
        $admin->name ="sample member";
        $admin->email ="member@gmail.com";
        $admin->password =bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($memberRole);
    }
}
