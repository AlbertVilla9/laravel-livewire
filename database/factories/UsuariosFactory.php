<?php

namespace Database\Factories;

use App\Usuarios;
use Faker\Generator as Faker;

$factory->define(Usuarios::class, function (Faker $faker)
{
    $title = $faker->sentence(1);
     return [
            'name' => $title,
            'password' => $title,
            'email' => $title,       
        ];
    }
});
