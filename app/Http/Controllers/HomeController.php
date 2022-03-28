<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $details = array(
            'Name' => 'James Nicole Ybañez',
            'Midterm' => '10/50', 
            
        );

        return view ('home')->with('details', $details);
    }

 }