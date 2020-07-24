<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name','admin')->first();
        $guestRole = Role::where('name','guest')->first();
        $direktorsRole = Role::where('name','direktors')->first();
        $DNVRole = Role::where('name','DNV')->first();
        $audzinatajaRole = Role::where('name','audzinataja')->first();


        $admin = User::create([
            'name' => 'Admin User',
            'email'=> 'admin@admin.com',
            'password'=>Hash::make('adminadmin'),
        ]);
        $direktors = User::create([
            'name' => 'Direktors User',
            'email'=> 'direktors@direktors.com',
            'password'=>Hash::make('direktorsdirektors'),
        ]);
         $audzinataja = User::create([
            'name' => 'Audzinataja User',
            'email'=> 'audzinataja@audzinataja.com',
            'password'=>Hash::make('audzinatajaaudzinataja'),
        ]);
         $DNV = User::create([
        'name' => 'DNV User',
        'email'=> 'DNV@DNV.com',
        'password'=>Hash::make('DNVDNV'),
         ]);
        $guest = User::create([
            'name' => 'guest User',
            'email'=> 'guest@guest.com',
            'password'=>Hash::make('guestguest'),
        ]);

        $admin->roles()->attach($adminRole);
        $direktors->roles()->attach($direktorsRole);
        $audzinataja->roles()->attach($audzinatajaRole);
        $DNV->roles()->attach($DNVRole);
        $guest->roles()->attach($guestRole);

    }
}
