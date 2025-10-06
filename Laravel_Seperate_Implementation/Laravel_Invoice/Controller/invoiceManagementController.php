<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceManagementController extends Controller
{



    public function checkfunction(){
        return "<h1>Hello World2 </h1>";
    }


    public function show($id)
    {
        // Normally you would fetch from DB
        $invoice = [
            'id' => $id,
            'invoice_no' => 'INV-2025-001',
            'date' => now()->format('Y-m-d'),
            'due_date' => now()->addDays(14)->format('Y-m-d'),
            'company' => [
                'name' => 'GenxThofa Technologies',
                'address' => '123 Example Street, Chennai, Tamil Nadu',
                'gst' => '33ABCDE1234F1Z5',
                'email' => 'accounts@yourcompany.com',
                'phone' => '+91 44 1234 5678',
                'logo' => asset('logo/genx-Logo.svg')
            ],
            'client' => [
                'name' => 'Prasath Arumugam',
                'company' => 'Client Company',
                'email' => 'client@company.com',
                'phone' => '+91 98765 43210'
            ],
            'items' => [
                [
                    'description' => 'Design & Development of Landing Page',
                    'qty' => 1,
                    'unit_price' => 25000,
                    'tax' => 18
                ],
                [
                    'description' => 'Monthly maintenance (Sep 2025)',
                    'qty' => 1,
                    'unit_price' => 3000,
                    'tax' => 18
                ]
            ],
            'bank' => 'State Bank of India • A/C: 1234567890 • IFSC: SBIN0001234 • UPI: yourcompany@upi'
        ];

        return view('invoice.invoice', compact('invoice'));
    }
}
