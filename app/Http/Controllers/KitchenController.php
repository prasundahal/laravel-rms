<?php

namespace App\Http\Controllers;
use App\Iteam;
use App\Kitchen;
use App\Order;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::all();

        return view('kitchens.index', compact('orders'));
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
     * @param  \App\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function show(Kitchen $kitchen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function edit(Kitchen $kitchen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kitchen $kitchen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kitchen $kitchen)
    {
        //
    }
}
