<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    //

    public function index()
    {
        return view('html101');
    }
    public function store(Request $request)
    {
       $data['fname'] = $request->input('fname');
        $data['lname'] = $request->input('lname');
        $data['date']  = $request->input('date'); // ชื่อใน form คือ date
        $data['age']   = $request->input('age');
        $data['sex']   = $request->input('sex');
        $data['address'] = $request->input('userAddress'); // ชื่อใน form คือ userAddress
        $data['color'] = $request->input('favColor');
        $data['genre'] = $request->input('genre');
        $data['consent'] = $request->has('consent') ? 1 : 0;
        return view('userinfo' , $data);
    }
}
