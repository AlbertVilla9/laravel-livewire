<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use App\Models\User;
use Illuminate\Validation\Rules;
use App\Providers\RouteServiceProvider;
use Faker\Generator as Faker;
use DB;

class CreateURL extends Controller
{
    public function store(Request $request)

    {   
        
        $request->validate([
            'urlvideo' => ['required', 'url']
        ]);
        
        
        $url = $request->urlvideo;
        $hash = $request->hash;
        
        $user = Url::create([
            'userid' => $request->userid,
            'hash' => $request->hash,
            'urlvideo' => $request->urlvideo,
        ]);
       

        exec("qrcode -E 'h' -s 50 -o /var/www/public/imagesQr/".$request->hash.".png ".env('APP_URL', false) . "/ar/" .$request->hash);
        
        $command = "node ./js/NFT/app.js -i ../../imagesQr/".$request->hash.".png";
        $res = exec($command);
        
        $url = DB::table('urls')->get()->where('hash', $request->hash)->first();
        return view('video', ['urlvideo' => $url]);
        view('ar', ['urlvideo' => $url]);
    }
}
