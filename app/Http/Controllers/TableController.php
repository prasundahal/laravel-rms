<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;
class TableController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tables = table::all();

        return view('tables.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([


        'table_number'=>'required',
        'table_capicity'=>'required'


        ]);

        $table = new table([


            'table_number'=>$request->get('table_number'),
            'table_capicity'=>$request->get('table_capicity')





        ]);
        $table->save();
        return redirect('/tables')->with('success', 'table saved!');
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
        $table = table::find($id);
        return view('tables.edit', compact('table'));
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
        $request->validate([
        'table_id'=>'required',
        'table_number'=>'required',
        'table_capicity'=>'required'

        ]);

        $table = table::find($id);

     $table->table_id = $request->get('table_id');
     $table->table_number = $request->get('table_number');
     $table->table_capicity = $request->get('table_capicity');

     $table->save();

     return redirect('/tables')->with('sucess','table Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = table::find($id);
        $table->delete();

        return redirect('/tables')->with('success', 'table Deleted sucess!');
    }
}
