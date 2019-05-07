<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {

        $users = User::all();


        return view('users.index')->withUsers($users);

        // return $this->authorize('view',$user);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $this->authorize('create',$user  );

        return view('users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->all();
        $request->validate([
            'name'=>'required|max:155',
            'email'=>'required|email',
            'password'=>'required|max:255',

        ]);

        $users = new User;


        $users->name=$request->name;
        $users->email =$request->email;
        $users->password = Hash::make($request->password);
        $users->post=$request->post;
        $users->department=$request->department;
        $users->type=$request->type;
        $users->photo = $request->photo;// new code should be placed..
        $users->bio = $request->bio;


        $users->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrfail(1);

        return view('users.view',compact('user'));




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


            $user= User::find($id);
            return view('users.edit')->withUsers($user);


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
            'name'=>'required|max:155',
            'email'=>'required',
            'password'=>'required|max:255',

        ]);

        $users =  User::find($id);
        $users->department=$request->department;
        $users->type=$request->type;
        $users->post=$request->post;

        $users->photo = $request->photo;// new code should be placed..
        $users->bio = $request->bio;
        $users->save();
        return redirect()->back();

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // User::where('id',$id)->delete();


        return $user = User::find($id);
        $user->delete();
        return redirect(route('users.index'));


    }
}
