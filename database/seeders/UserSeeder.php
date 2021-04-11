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
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@myshop.com";
        $user->mobile = "01201891564";
        $user->role = "Admin";
        $user->password = Hash::make("123456");
        $user->save();
        $user = new User();
        $user->name = "islam";
        $user->email = "islam@myshop.com";
        $user->mobile = "01112256125";
        $user->role = "customer";
        $user->password = Hash::make("123456");
        $user->save();
        $user = new User();
        $user->name = "mostafa";
        $user->email = "mostafa@myshop.com";
        $user->mobile = "01203706439";
        $user->role = "customer";
        $user->password = Hash::make("123456");
        $user->save();
    }
}
