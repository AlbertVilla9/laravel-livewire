<?php

namespace Database\Factories;

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker)
{
    $title = $faker->sentence(1);
     return [
            'name' => $title,
            'password' => $title,
            'email' => $title,       
        ];
    }
});
