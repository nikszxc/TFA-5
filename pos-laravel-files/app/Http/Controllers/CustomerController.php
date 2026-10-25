<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    // Customer Accounts page (/customers)
    public function index()
    {
        // Temporary static data source (no database yet)
        $customers = [
            ['full_name' => 'Maria Santos',     'email' => 'maria.santos@example.com',     'phone' => '0917-123-4567'],
            ['full_name' => 'Juan Dela Cruz',   'email' => 'juan.delacruz@example.com',    'phone' => '0918-234-5678'],
            ['full_name' => 'Ana Reyes',        'email' => 'ana.reyes@example.com',        'phone' => '0919-345-6789'],
            ['full_name' => 'Jose Ramirez',     'email' => 'jose.ramirez@example.com',     'phone' => '0920-456-7890'],
            ['full_name' => 'Liza Bautista',    'email' => 'liza.bautista@example.com',    'phone' => '0921-567-8901'],
            ['full_name' => 'Carlo Mendoza',    'email' => 'carlo.mendoza@example.com',    'phone' => '0922-678-9012'],
        ];

        return view('customers', [
            'title'     => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
