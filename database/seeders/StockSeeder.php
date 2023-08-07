<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blood_id =[1,2,3,4,5,6,7,8];
        $unit =0;
        for($i=0; $i<7;$i++) {
            $stock=new Stock();
            $stock->blood_id=$blood_id[$i];
            $stock->unit=$unit;
            $stock->save();
        }
    }
}
