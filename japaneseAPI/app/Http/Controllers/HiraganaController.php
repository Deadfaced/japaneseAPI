<?php

namespace App\Http\Controllers;

use App\Hiragana;
use Illuminate\Http\Request;

class HiraganaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Hiragana::all(), 200);
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
        $hiragana = Hiragana::create($request->all());
        return response()->json($hiragana, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hiragana  $hiragana
     * @return \Illuminate\Http\Response
     */
    public function show(Hiragana $hiragana)
    {
        return response()->json($hiragana, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hiragana  $hiragana
     * @return \Illuminate\Http\Response
     */
    public function edit(Hiragana $hiragana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hiragana  $hiragana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hiragana $hiragana)
    {
        $hiragana->update($request->all());
        return response()->json($hiragana, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hiragana  $hiragana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hiragana $hiragana)
    {
        $hiragana->delete();
        return response()->json(null, 204);
    }

    public function search(Request $request)
    {
        return response()->json(Hiragana::orderBy("id", "asc")->where('romaji', 'LIKE', '%' . $request.romaji . '%')->get(), 200);
    }
}
