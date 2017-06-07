<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the terms of service for the application.
     *
     * @return \Illuminate\Http\Response
     */

    //Vultr snapshot part;
    public function show(Request $request)
    {
        $test_array = array (
          $request->product_name  => 'product_name',
          $request->quantity_in_stock => 'quantity_in_stock',
          $request->price_per_item => 'price_per_item',
          date('l jS \of F Y h:i:s A') => 'time',
          $request->quantity_in_stock * $request->price_per_item => 'total_value_number'
        );
        
        $xml = new \SimpleXMLElement('<root/>');
        array_walk_recursive($test_array, array ($xml, 'addChild'));
//        print $xml->asXML();
        Storage::put('output.xml', $xml->asXML());
        return view('submit');
    }
}
