<?php

namespace App\Http\Controllers;

use App\Burger;
use Illuminate\Http\Request;

class BurgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $burgers = Burger::all();
        return view('burgers.adminpage', compact('burgers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('burgers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $burger = new Burger();
        $burger->bname = request('bname');
        $burger->descrp = request('descrp');
        $burger->quant = request('quant');
        $burger->save();
        return redirect('/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Burger  $burger
     * @return \Illuminate\Http\Response
     */
    public function show(Burger $burger)
    {
        $burgers = Burger::all();
        return view('burgers.show', compact('burgers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Burger  $burger
     * @return \Illuminate\Http\Response
     */
    public function edit(Burger $burger)
    {
        return view('burgers.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Burger  $burger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Burger $burger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Burger  $burger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Burger $burger)
    {
        //
    }
}
