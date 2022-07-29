<?php

namespace App\Http\Controllers;
use App\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {

        $trains=Train::all()->where("DataPartenza","2022-07-29");
        return view('HomePage',compact("trains"));
    }
}
