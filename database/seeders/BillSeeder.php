<?php

namespace Database\Seeders;

use App\Models\Bill;
use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Bill::where('name','Energia')->first()) {
            Bill::create([
                'name' => 'Energia',
                'bill_value' => 147.52,
                'due_date' => '2024-06-18'
            ]);
        }
        if(!Bill::where('name','Faculdade')->first()) {
            Bill::create([
                'name' => 'Faculdade',
                'bill_value' => 447.52,
                'due_date' => '2024-06-19'
            ]);
        }
    }
}
