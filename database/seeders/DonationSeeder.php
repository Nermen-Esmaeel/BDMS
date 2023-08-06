<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Donation;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_id =2;
       $unit =[1,1,4,4,4];
        $last_date =['2023-08-08','2022-08-07','2022-08-08','2023-06-08','2023-07-08'];
        $feedback='Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua';
        $status = 'Pending' ;
        $diseases = 0;
         for($i=0; $i<5;$i++) {
             $donation=new Donation();
             $donation->user_id=$user_id;
             $donation->Unit=$unit[$i];
             $donation->last_date=$last_date[$i];
             $donation->feedback=$feedback;
             $donation->status=$status;
             $donation->diseases=$diseases;
             $donation->save();
         }

    }
    }

