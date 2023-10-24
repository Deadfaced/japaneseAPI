<?php

namespace App\Http\Controllers;

use App\Katakana;
use Illuminate\Http\Request;

class KatakanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Katakana::all(), 200);
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
        $katakana = Katakana::create($request->all());
        return response()->json($katakana, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Katakana  $katakana
     * @return \Illuminate\Http\Response
     */
    public function show(Katakana $katakana)
    {
        return response()->json($katakana, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Katakana  $katakana
     * @return \Illuminate\Http\Response
     */
    public function edit(Katakana $katakana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Katakana  $katakana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Katakana $katakana)
    {
        $katakana->update($request->all());
        return response()->json($katakana, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Katakana  $katakana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Katakana $katakana)
    {
        $katakana->delete();
        return response()->json(null, 204);
    }

    public function search(Request $request)
    {
        return response()->json(Katakana::orderBy("id", "asc")->where('romaji', 'LIKE', '%' . $request.romaji . '%')->get(), 200);
    }
}
