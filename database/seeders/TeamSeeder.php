<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder {
    public function run() {
        $teams = [[
            'name' => 'Botafogo',
            'city' => 'Rio de Janeiro',
            'logo' => 'teams/botafogo-escudo.webp',
            'contact' => 'botafogo@gmail.com',
        ],
        [
            'name' => 'Flamengo',
            'city' => 'Rio de Janeiro',
            'logo' => 'teams/framengo.webp',
            'contact' => 'flamengo@gmail.com',
        ],
        [
            'name' => 'Paris Saint Germain',
            'city' => 'Paris',
            'logo' => 'teams/PSG.webp',
            'contact' => 'psg@gmail.com',
        ],
        [
            'name' => 'Fortaleza',
            'city' => 'Fortaleza',
            'logo' => 'teams/Fortaleza.webp',
            'contact' => 'fortaleza@gmail.com',
        ],
        [
            'name' => 'Remo',
            'city' => 'Remada',
            'logo' => 'teams/Remo.webp',
            'contact' => 'remo@gmail.com',
        ],  
        [
            'name' => 'Ceará',
            'city' => 'Fortal city',
            'logo' => 'teams/Ceara.webp',
            'contact' => 'ceara@gmail.com',
        ]];
        foreach ($teams as $team) { 
            Team::create($team);
        }
    }
}   