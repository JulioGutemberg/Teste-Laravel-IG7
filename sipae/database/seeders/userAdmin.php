<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $admin = User::create([
            'name'    => 'Admin',
            'email'   => 'admin@system.com',
            'password'=> bcrypt('123456')
        ]);
        
        $admin->assignRole('admin');
        
    }
}
