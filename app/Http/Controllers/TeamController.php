<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller
{
    public function index() {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }
    public function create() {
        return view('teams.create');
    }
        public function showTeams()
    {
        $teams = Team::all();
        return view('teams.teams', compact('teams'));
    }

    public function showContacts()
    {
        $teams = Team::all();
        return view('teams.contacts', compact('teams'));
    }


    public function store(StoreTeamRequest $request) {
        $path = $request->file('logo')->store('teams', 'public');
        Team::create([
        'name' => $request->name,
        'city' => $request->city,
        'logo' => $path,
        'contact' => $request->contact,
        ]);
        return redirect()->route('times');
    }
    public function edit(Team $team) {
        return view('teams.edit', compact('team'));
    }
    public function update(UpdateTeamRequest $request, Team $team) {
        $team->update($request->only(['name','city','contact']));
        if ($request->hasFile('logo')) {
            if ($team->logo) {
            Storage::disk('public')->delete($team->logo);
            }
            $team->logo = $request->file('logo')->store('teams', 'public');
        } else {
            $team->logo = $team->logo;
        }
        $team->update(["logo" => $team->logo]);
        return redirect()->route('times');
    }
    public function destroy(Team $team) {
        if ($team->logo) {
        Storage::disk('public')->delete($team->logo);
        }
        $team->delete();
        return redirect()->route('times');
    }
}
