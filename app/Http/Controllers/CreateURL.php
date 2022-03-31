<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use App\Models\User;
use Illuminate\Validation\Rules;
use App\Providers\RouteServiceProvider;
use Faker\Generator as Faker;

class CreateURL extends Controller
{
    public function store(Request $request)

    {   
        
        $request->validate([
            'urlvideo' => ['required', 'url']
        ]);
        
        
        $url = $request->urlvideo;
        
        $user = Url::create([
            'userid' => $request->userid,
            'hash' => $request->hash,
            'urlvideo' => $request->urlvideo,
        ]);

        exec("qrcode -o /var/www/public/".$request->hash.".png ".env('APP_URL', false) . "/vr/" . $request->hash);
        //exec("node app.js -i <path-to-the-img/image-name.jpg/png>");

        return redirect(RouteServiceProvider::HERE);
    }
}
