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

        if ($data['firstName']) {
            $data['firstName'] = $data['firstName'];
        } else {
            $data['firstName'] = 'Francis';
        }

        if ($data['lastName']) {
            $data['lastName'] = $data['lastName'];
        } else {
            $data['lastName'] = 'Davison';
        }

        //confirmation number
        $data['confirmationNumber'] = strrev($data['firstName']) . rand(0, 100);

        return view('result')->with('data', $data);
        
    }
}
