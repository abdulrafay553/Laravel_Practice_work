<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singleController1 extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //

        return "<h1>SINGLE CONTROLLER FUNCTION CALLED....</h1>";
    }
}
