<?php

namespace App\Http\Controllers;

use App\Models\Validation;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public  function home()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $store = new Validation();
        $store->name = $request->email;
        $store->address = $request->address;
        $store->city = $request->city;
        $store->state = $request->state;
        $store->save();
    }
}
