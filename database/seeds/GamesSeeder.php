<?php

use Illuminate\Database\Seeder;
use App\Game;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'name' => 'Meme Team CoS',
            'campaign' => 'Curse of Strahd',
            'rule_set' => '5E',
            'status' => 'Active',
            'user_id' => 1
        ]);

        Game::create([
            'name' => 'MIPU LMoP',
            'campaign' => 'Lost Mine of Phandelver',
            'rule_set' => '5E',
            'status' => 'Complete',
            'user_id' => 1
        ]);
    }
}
