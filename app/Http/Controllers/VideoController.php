<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index(){
        $urls = DB::select('select urlvideo from urls');
        return view ('video')->with('urlvideo',$urls);
    }
}
