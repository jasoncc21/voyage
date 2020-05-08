<?php

use App\OrderDetails;
use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetails::truncate();
        OrderDetails::create(['ONo' => '2000-10-10', 'PDNo' => 'pd01', 'OPrice' => '100', 'OQty' => '99']);
    }
}
