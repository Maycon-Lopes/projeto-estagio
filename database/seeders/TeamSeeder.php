<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder {
    public function run() {
        $teams = [
            [
                'name' => 'Botafogo',
                'city' => 'Rio de Janeiro',
                'logo' => 'botafogo.png',
                'players' => 'Gatito Fernandez, Diego Gonçalves, Rafael Navarro',
                'contact' => 'contato@botafogo.com.br',
            ],
            [
                'name' => 'Flamengo',
                'city' => 'Rio de Janeiro',
                'logo' => 'flamengo.png',
                'players' => 'Gabriel Batista, Renato Augusto, Diego Alves',
                'contact' => 'contato@flamengo.com.br',
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}