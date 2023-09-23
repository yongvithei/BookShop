<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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


    }
}
