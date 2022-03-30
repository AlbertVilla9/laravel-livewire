<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Url extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'hash',
        'userid',
        'urlvideo',
    ];

    /*
    public function user() {
        return $this->belongsTo(User::class);
    }
    */
}
