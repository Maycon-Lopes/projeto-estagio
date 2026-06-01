<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;

class TeamController extends Controller
{
    public function index() {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }
    public function create() {
        return view('teams.create');
    }
    public function store(StoreTeamRequest $request) {
        $path = $request->file('logo')->store('teams', 'public');
        Team::create([
        'name' => $request->name,
        'city' => $request->city,
        'logo' => $path,
        'players' => $request->players,
        'contact' => $request->contact,
        ]);
        return redirect()->route('teams.index');
    }
    public function edit(Team $team) {
        return view('teams.edit', compact('team'));
    }
    public function update(Request $request, Team $team) {
        $team->update($request->all());
        return redirect()->route('teams.index');
    }
    public function destroy(Team $team) {
        $team->delete();
        return back();
    }
}
