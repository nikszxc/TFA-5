<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    // User Accounts page (/users)
    public function index()
    {
        // Temporary static data source (no database yet)
        $users = [
            ['username' => 'admin',    'full_name' => 'Andrea Magnaye',  'role' => 'Administrator'],
            ['username' => 'mmanager', 'full_name' => 'Miguel Manalo',   'role' => 'Manager'],
            ['username' => 'cashier1', 'full_name' => 'Rosa Villanueva', 'role' => 'Cashier'],
            ['username' => 'cashier2', 'full_name' => 'Paolo Garcia',    'role' => 'Cashier'],
            ['username' => 'stock01',  'full_name' => 'Grace Aquino',    'role' => 'Inventory Clerk'],
            ['username' => 'sales01',  'full_name' => 'Noel Castillo',   'role' => 'Sales Associate'],
        ];

        return view('users', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
