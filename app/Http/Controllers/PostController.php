<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Post()
    {
        $id = array (
            'fname' => 'James Nicole',
            'lname' => 'Ybañez', 
            'course' => 'BSIT',
            'age' => '21', 
            'block' => 'C'
        );

        return view ('post')->with('id', $id);

    }
}