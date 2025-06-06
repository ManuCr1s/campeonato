<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      /*   Permission::create(['name'=>'View Team']);
        Permission::create(['name'=>'Edit Team']);
        Permission::create(['name'=>'Create Team']);
        Permission::create(['name'=>'Delete Team']);
        Permission::create(['name'=>'View Player']);
        Permission::create(['name'=>'Edit Player']);
        Permission::create(['name'=>'Create Player']);
        Permission::create(['name'=>'Delete Player']); */
        //$role = Role::create(['name' => 'Admin']);
        $delegateUser = User::query()->create([
            'dni'=>'73143090',
            'name' => 'MANUEL',
            'lastname' => 'CRISTOBAL NEYRA',
            'id_office' => 34,
            'password' =>  Hash::make('73143090'),
        ]);
        //$role = Role::create(['name'=>'Delegate']); 
        $delegateUser->assignRole('Delegate');
       // $permissionsAdmin = Permission::query()->pluck('name');
      //  $role->syncPermissions($permissionsAdmin);
    }
}
