<?php

namespace App\Http\Controllers;
use App\Models\Test;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        $values=Test::all();
        return view('test.test',compact('values'));
    }
}
