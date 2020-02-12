<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $cl= client::where('recentCondition','0')->get();
        //dd($cl);
        
        //return view('clients',['Clients'=>client::all()]);
       return view('clients',['Clients'=>$cl]);
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

$client=new client();
$client->title=$request->input('title');
$client->name=$request->input('name');
$client->lastname=$request->input('lastName');
$client->address=$request->input('address');
$client->city=$request->input('city');

$client->email=$request->input('email');
$d=date('Y-m-d');

$client->date=$d;
$client->save();
return redirect()->route('client.index');

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
        return view('edit',['client'=>client::findOrFail($id)]);
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
$client=client::findOrFail($id);
$client->title=$request->input('title');
$client->name=$request->input('name');
$client->lastname=$request->input('lastName');
$client->address=$request->input('address');
$client->city=$request->input('city');

$client->email=$request->input('email');

$client->save();
return redirect()->route('client.index');
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