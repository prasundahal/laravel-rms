<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iteam;
use App\Table;
use App\Tableorder;
use App\Order;
use App\Category;

class IteamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iteams = iteam::all();

        return view('iteams.index', compact('iteams'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $categorys = Category::pluck('category_name', 'category_name');
        $selectedID = 2;
        return view('iteams.create', compact('categorys','selectedID'));
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

        'iteam_name'=>'required',
        'iteam_price'=>'required',
        'iteam_discription'=>'required',
        'iteam_category'=>'required',
        'iteam_time'=>'required',
        'image'         =>  'required'

        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

            $form_data = array(

            'iteam_name'=>$request->iteam_name,
            'iteam_price'=>$request->iteam_price,
            'image'=> $new_name,
            'iteam_discription'=>$request->iteam_discription,
            'iteam_category'=>$request->iteam_category,
            'iteam_time'=>$request->iteam_time


        );


        Iteam::create($form_data);

        return redirect('/iteams')->with('success', 'Data Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Iteam::findOrFail($id);
        return view('iteams.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categorys = Category::pluck('category_name', 'id');
        $selectedID = 2;
        return view('iteams.create', compact('categorys','selectedID'));





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
        'iteam_name'=>'required',
        'iteam_price'=>'required',
        'iteam_discription'=>'required',
        'iteam_category'=>'required',
        'iteam_time'=>'required'
        ]);

        $iteam = Iteam::find($id);

     $iteam->iteam_name = $request->get('iteam_name');
     $iteam->iteam_category = $request->get('iteam_category');

     $iteam->iteam_price = $request->get('iteam_price');
     $iteam->iteam_discription = $request->get('iteam_discription');
     $iteam->iteam_time = $request->get('iteam_time');
     $iteam->save();

     return redirect('/iteams')->with('sucess','Iteam Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iteam = Iteam::find($id);
        $iteam->delete();

        return redirect('/iteams')->with('success', 'Iteam Deleted sucess!');
    }






}
