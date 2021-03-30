<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (isset($_REQUEST['q']) == 'nogear') {
			$games = Game::where('gear', 'なし')->paginate(100);
		} elseif (isset($_REQUEST['team_flag']) == 'individual') {
			$games = Game::where('team_flag', 'LIKE', '%個人%')->paginate(100);
		} elseif (isset($_REQUEST['team_only']) == 'true') {
			$games = Game::where('team_flag', 'LIKE', '%チーム%')->paginate(100);
		} else {
			$games = Game::orderBy('id', 'desc')->paginate(10);
		}

		return view('games.index', compact('games'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('games.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$game = new Game();

		$game->title = $request->input("title");
		$game->target = $request->input("target");
		// $game->team_flag = $request->input("team_flag");
		$game->duration = $request->input("duration");
		$game->at_least = $request->input("at_least");
		$game->field = $request->input("field");
		$game->gear = $request->input("gear");
		$game->how_to = $request->input("how_to");
		$game->over_view = $request->input("over_view");
		$game->hint = $request->input("hint");
		$game->safty_point = $request->input("safty_point");
		$game->arrangement = $request->input("arrangement");

		if($request->input("team_flag")){
			$team_flag = implode(',',$request->input("team_flag"));
			$game->team_flag = $team_flag;
		}

		$game->save();

		return redirect()->route('games.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$game = Game::findOrFail($id);

		return view('games.show', compact('game'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$game = Game::findOrFail($id);

		return view('games.edit', compact('game'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$game = Game::findOrFail($id);

		$game->title = $request->input("title");
		$game->body = $request->input("body");

		$game->save();

		return redirect()->route('games.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$game = Game::findOrFail($id);
		$game->delete();

		return redirect()->route('games.index')->with('message', 'Item deleted successfully.');
	}
}
