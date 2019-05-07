<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Nominee;
use DB;

class NomiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $nomis = DB::table('users')->select('is_nominee');
       //dd("dd");
         $nominees = User::where('is_nominee', 1)->get();
        return view('nominees.index')->with('nominees', $nominees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('nominees.create')->withUsers($users);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  return $request->all();
        $request->validate([
            'nominees' => 'required|array',
        ]);
       foreach ($request->nominees as $nominee){
        $user = User::findOrfail($nominee);
        $user->is_nominee = true;
        $user->save();
       }
       return redirect()->route('nomis.index');
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
        //
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
        //
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
