<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    //
     /**
     * Show the pay me later form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('order');
    }

     /**
     * Handles the form
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function handle(Request $request)
    {
        $data = $request->input();
        return view('result')->with('data', $data);
        
    }
}
