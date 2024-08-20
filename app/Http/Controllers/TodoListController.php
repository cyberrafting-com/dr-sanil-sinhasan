<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function saveItem(Request $request){
        return view('home');
    }
}
