<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\model_ytvideos;

class ytseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        model_ytvideos::create([
            "Video Name" => "$1 vs $1,000,000 Hotel Room!",
            "Video URL" => "https://www.youtube.com/watch?v=iogcY_4xGjo",
            "Video Description" => "Visiting hotels from $1 upto $1,000,000",
        ]);

        model_ytvideos::create([
            "Video Name" => "DIFFERENT KIND OF LEG DAY | FIRST RAW HOME EVENT",
            "Video URL" => "https://www.youtube.com/watch?v=G5C8p6Iej5s",
            "Video Description" => "CBUM Vlog on leg day",
        ]);

        model_ytvideos::create([
            "Video Name" => "Steve-O's Worst Injury And Health Struggle",
            "Video URL" => "https://www.youtube.com/watch?v=og37bL_rTmw",
            "Video Description" => "Steve-O Talking about his life",
        ]);

        model_ytvideos::create([
            "Video Name" => "Python YouTube API Tutorial: Using OAuth to Access User Accounts",
            "Video URL" => "https://www.youtube.com/watch?v=vQQEaSnQ_bs",
            "Video Description" => "",
        ]);

        model_ytvideos::create([
            "Video Name" => "Python OOP Tutorial 1: Classes and Instances",
            "Video URL" => "https://www.youtube.com/watch?v=ZDa-Z5JzLYM",
            "Video Description" => "",
        ]);
    }
}
