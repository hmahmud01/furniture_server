<?php

namespace App\Http\Controllers;

use App\Password;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Password::all();
        return view('password.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('password.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->get('password') === $request->get('conf_password')){
            $password = new Password([
                'category' => $request->get('category'),
                'password' => $request->get('password')
            ]);
            $password->save();
            return redirect('/password')->with('success', 'Password Set done');
        }else{
            return redirect('/password')->with('error', 'Password Set failed');
        }
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

    public function redirectPage(Request $request){
        $pass = $request->password;
        $cat_name = $request->category;
        $object = Password::where('category', $cat_name)->first();    
        if($object->password == $pass){
            return redirect('/furniture-member');
        }else{
            return redirect('/categories')->with('error', 'wrong password');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Password::find($id);
        return view('password.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        if($request->get('password') === $request->get('conf_password')){
            $password = Password::find($id);
            $password->password = $request->get('password');            
            $password->save();
            return redirect('/password')->with('success', 'Password Update done');
        }else{
            return redirect('/password')->with('error', 'Password Update failed');
        }
    }

    public function customUpdate(Request $request){
        $id = $request->id;
        if($request->get('password') === $request->get('conf_password')){
            $password = Password::find($id);
            $password->password = $request->get('password');            
            $password->save();
            return redirect('/password')->with('success', 'Password Update done');
        }else{
            return redirect('/password')->with('error', 'Password Update failed');
        }
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
