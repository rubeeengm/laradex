<?php

use Illuminate\Database\Seeder;
use LaraDex\Trainer;

class TrainerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Trainer();
        $user->name = "Ash";
        $user->avatar = "1550860487ash.png";
        $user->slug = "ash";

        $user->save();

        $user = new Trainer();
        $user->name = "Misty";
        $user->avatar = "1550860519misty.png";
        $user->slug = "misty";

        $user->save();

        $user = new Trainer();
        $user->name = "Brock";
        $user->avatar = "1550860558brock.png";
        $user->slug = "brock";

        $user->save();
    }
}
