<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        // Create roles
        $roleSeller = Role::create(['name' => 'Seller']);
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleAccount = Role::create(['name' => 'Account']);
        $roleManager = Role::create(['name' => 'Manager']);

        // Create permissions
        $permissionDashboard = Permission::create(['name' => 'dashboard.menu']);
        $permissionOrder = Permission::create(['name' => 'order.menu']);
        $permissionUser = Permission::create(['name' => 'user.menu']);
        $permissionReport = Permission::create(['name' => 'report.menu']);
        $permissionProduct = Permission::create(['name' => 'product.menu']);
        $permissionCategory = Permission::create(['name' => 'category.menu']);
        $permissionBusiness = Permission::create(['name' => 'business.menu']);
        $permissionReview = Permission::create(['name' => 'review.menu']);
        $permissionPromo = Permission::create(['name' => 'promo.menu']);
        $permissionRole = Permission::create(['name' => 'role.menu']);
        $permissionAssign = Permission::create(['name' => 'assign.menu']);
        $permissionSite = Permission::create(['name' => 'site.menu']);
        $permissionBackup = Permission::create(['name' => 'backup.menu']);


        // Assign permissions to roles
        $roleSeller->givePermissionTo([
            $permissionOrder,
            $permissionProduct,
            $permissionCategory,
            $permissionBusiness,
            $permissionPromo
        ]);

        $roleAdmin->givePermissionTo([
            $permissionDashboard,
            $permissionOrder,
            $permissionUser,
            $permissionReport,
            $permissionProduct,
            $permissionCategory,
            $permissionBusiness,
            $permissionReview,
            $permissionPromo,
            $permissionRole,
            $permissionAssign,
            $permissionSite,
            $permissionBackup
        ]);

        $roleAccount->givePermissionTo([
            $permissionOrder,
            $permissionUser,
            $permissionReport,
            $permissionReview,
            $permissionAssign
        ]);

        $roleManager->givePermissionTo([
            $permissionDashboard,
            $permissionOrder,
            $permissionUser,
            $permissionReport,
            $permissionProduct,
            $permissionCategory,
            $permissionBusiness,
            $permissionReview,
            $permissionPromo,
            $permissionRole,
            $permissionAssign,
            $permissionSite,
            $permissionBackup
        ]);

        $user = \App\Models\User::factory()->create([
            'name' => 'admin',
            'username' => 'vithei',
            'email' => 'vithei@gmail.com',
            'password' => Hash::make('root'),
            'remember_token' => Str::random(10),
            'role' => 'Admin',
            'email_verified_at' => now(),
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        $user->assignRole($roleAdmin);
        $user = \App\Models\User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('root'),
            'remember_token' => Str::random(10),
            'role' => 'Admin',
            'email_verified_at' => now(),
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        $user->assignRole($roleAdmin);


    }
}
