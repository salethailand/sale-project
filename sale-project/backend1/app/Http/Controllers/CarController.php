<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Http\Resources\CarCollection;

class CarController extends Controller
{
    public function index()
    {
        // return "adfasdf";
        return new CarCollection(Car::all());
    }

    // public function show($id)
    // {
    //     return new PlayerResource(Player::findOrFail($id));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|max:255',
    //     ]);

    //     $player = Player::create($request->all());

    //     return (new PlayerResource($player))
    //             ->response()
    //             ->setStatusCode(201);
    // }

    // public function answer($id, Request $request)
    // {
    //     $request->merge(['correct' => (bool) json_decode($request->get('correct'))]);
    //     $request->validate([
    //         'correct' => 'required|boolean'
    //     ]);

    //     $player = Player::findOrFail($id);
    //     $player->answers++;
    //     $player->points = ($request->get('correct')
    //                        ? $player->points + 1
    //                        : $player->points - 1);
    //     $player->save();

    //     return new PlayerResource($player);
    // }

    // public function delete($id)
    // {
    //     $player = Player::findOrFail($id);
    //     $player->delete();

    //     return response()->json(null, 204);
    // }

    // public function resetAnswers($id)
    // {
    //     $player = Player::findOrFail($id);
    //     $player->answers = 0;
    //     $player->points = 0;

    //     return new PlayerResource($player);
    // }
}
