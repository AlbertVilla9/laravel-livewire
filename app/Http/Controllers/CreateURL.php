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
        
        $hash = random_strings(10);
        $url = $request->urlvideo;
        
        $user = Url::create([
            'userid' => $request->userid,
            'hash' => $hash,
            'urlvideo' => $request->urlvideo,
        ]);

        exec("qrcode -o /var/www/public/hola.png ${APP_URL} . /vr/ . $hash");
        exec("node app.js -i <path-to-the-img/image-name.jpg/png>")

        return redirect(RouteServiceProvider::HERE);
    }
}
