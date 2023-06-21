<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jual;
// use App\Http\Controllers\jualController;

class beliController extends Controller
{
    //
    function show (){
        $data['jual']=jual::paginate(2);

        return view ('beli',$data);
    }
}
