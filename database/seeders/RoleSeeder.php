<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name'=>'admin']);
        $employ = Role::create(['name'=>'employ']);
        $broker = Role::create(['name'=>'broker']);

        /* ROUTES */

        /* Admin Permission */
        Permission::create(['name' => 'admin.menu'])->assignRole($admin);
        Permission::create(['name' => 'admin.rent'])->assignRole($admin);
        Permission::create(['name' => 'admin.sale'])->assignRole($admin);
        Permission::create(['name' => 'admin.toys'])->assignRole($admin);
        Permission::create(['name' => 'admin.events'])->assignRole($admin);
        Permission::create(['name' => 'admin.news'])->assignRole($admin);
        Permission::create(['name' => 'admin.contact'])->assignRole($admin);
        Permission::create(['name' => 'admin.users'])->assignRole($admin);
        Permission::create(['name' => 'admin.roles'])->assignRole($admin);
        Permission::create(['name' => 'admin.permissions'])->assignRole($admin);

        /* Shared Permissions */
        Permission::create(['name' => 'admin.home'])->syncRoles([$admin, $employ, $broker]);
        Permission::create(['name' => 'admin.profile'])->syncRoles([$admin, $employ, $broker]);
        Permission::create(['name' => 'admin.privarea'])->syncRoles([$admin, $employ, $broker]);
        Permission::create(['name' => 'admin.calendar'])->syncRoles([$admin, $employ, $broker]);
        Permission::create(['name' => 'admin.reservations'])->syncRoles([$admin, $employ, $broker]);
        
        /* ACTIONS SELF */
        Permission::create(['name' => 'admin.reservation.create'])->syncRoles([$admin, $employ, $broker]);
        Permission::create(['name' => 'admin.reservation.read'])->syncRoles([$admin, $employ, $broker]);
        Permission::create(['name' => 'admin.reservation.update'])->syncRoles([$admin, $employ, $broker]);
        Permission::create(['name' => 'admin.reservation.delete'])->syncRoles([$admin, $employ, $broker]);
        
        /* ACTIONS OTHER */
        Permission::create(['name' => 'admin.reservation.read.other'])->syncRoles([$admin, $employ, $broker]);
        Permission::create(['name' => 'admin.reservation.update.other'])->syncRoles([$admin, $employ, $broker]);
        Permission::create(['name' => 'admin.reservation.delete.other'])->syncRoles([$admin, $employ, $broker]);
    }
}
