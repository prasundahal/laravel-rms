<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;
use App\Tableorder;
use App\Order;
use App\Iteam;

class TableorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = table::all();

        return view('tableorders.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {



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
    public function edit(Request $request, $id)
    {
        $iteams = Iteam::pluck('iteam_name', 'id');
        $selectedID = 2;
        $table = table::find($id);
        return view('tableorders.edit', compact('table','iteams','selectedID'));
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

            'table_number'=>'required',
            'iteam_name'=>'required',
            'iteam_price'=>'required'


            ]);

         $table = table::find($id);


         $arrayTostring = implode(',', $request->input('iteam_name'));
         $table->iteam_name = $request->get('$arrayTostring');
         $table->table_number = $request->get('table_number');

         $table->iteam_price = $request->get('iteam_price');
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
        //
    }
}
