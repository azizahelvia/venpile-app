<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $owner = Role::create(["name"   => "Owner"]);
        $staff = Role::create(["name"   => "Staff"]);

        User::create([
            "name"      => "Owner Venpile",
            "email"     => "owner@venpile.com",
            "password"  => Hash::make("owner123"),
            "role_id"   => $owner->id,
        ]);
        User::create([
            "name"      => "John Doe (Staff)",
            "email"     => "johndoe@venpile.com",
            "password"  => Hash::make("staff123"),
            "role_id"   => $staff->id
        ]);
    }
}
