<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Reset cached roles and permissions
         app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

         // create permissions
         Permission::create(['name' => 'create']);
         Permission::create(['name' => 'read']);
         Permission::create(['name' => 'update']);
         Permission::create(['name' => 'edit']);
         Permission::create(['name' => 'delete']);

         Permission::create(['name' => 'create post']);
         Permission::create(['name' => 'edit post']);
         Permission::create(['name' => 'delete post']);
         Permission::create(['name' => 'publish post']);
         Permission::create(['name' => 'unpublish post']);

         // create roles and assign created permissions

         // this can be done as separate statements
         $role = Role::create(['name' => 'agente']);
         $role->givePermissionTo(['create post','edit post','delete post']);

         // or may be done by chaining
        //  $role = Role::create(['name' => 'moderator'])
        //      ->givePermissionTo(['publish post', 'unpublish post']);

        //  $role = Role::create(['name' => 'user'])
        //            ->givePermissionTo('read');

         $role = Role::create(['name' => 'admin'])
               ->givePermissionTo(['read','update','create','edit','delete']);

         $role = Role::create(['name' => 'super-admin']);
         $role->givePermissionTo(Permission::all());


           $user=User::create([
               'name' => 'Virgilio Riccardo',
               'email' => 'riccardo.virgilio@gmail.com',
               'password' => Hash::make('Vrz021281'),
           ]);

           $user->assignRole('super-admin');

           $user=User::create([
            'name' => 'Mario Rossi',
            'email' => 'mario@rossi.it',
            'password' => Hash::make('aqswdefr'),
            ]);

            $user->assignRole('agente');

            $user=User::create([
                'name' => 'Nicola Bianchi',
                'email' => 'nicola@bianchi.it',
                'password' => Hash::make('aqswdefr'),
                ]);

            $user->assignRole('agente');

    }
}
