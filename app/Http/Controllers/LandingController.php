<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// call use model

use App\Models\Club;
use App\Models\Manager;
use App\Models\Matche;
use App\Models\Player;
use App\Models\Stadium;

class LandingController extends Controller
{

    public function index()
    {
        return view('pages.landing-page.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // method custom

    public function clubs()
    {
        $clubs = Club::orderBy('thropy', 'desc')->get();

        return view('pages.landing-page.clubs', ['clubs' => $clubs]);
    }

    public function players()
    {
        $players = Player::all();

        return view('pages.landing-page.players', ['players' => $players]);
    }

    public function managers()
    {
        $managers = Manager::orderBy('old', 'desc')->get();

        return view('pages.landing-page.managers', ['managers' => $managers]);
    }

    public function stadiums()
    {
        $stadiums = Stadium::orderBy('capacity', 'desc')->get();

        return view('pages.landing-page.stadiums', ['stadiums' => $stadiums]);
    }
}
