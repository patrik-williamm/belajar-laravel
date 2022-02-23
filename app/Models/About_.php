<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About
{
    static $about = [ 
        [
            "name" => "patrik william",
            "age" => "20",
            "address" => "BTN SAO Sarana Indah",
            "aboutMe" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, autem? Placeat ea sint voluptate architecto repudiandae quas! Excepturi doloribus explicabo nisi soluta veniam possimus, modi ea quod cum vel officiis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum culpa, placeat sit laboriosam facere inventore sapiente cumque amet, assumenda hic alias qui quis nobis voluptates tenetur minus velit illo doloribus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, eligendi deleniti laudantium quaerat odio nulla explicabo ut sequi velit vel magnam. Assumenda adipisci molestiae labore exercitationem soluta distinctio, error fuga. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat maiores fuga consectetur voluptas quod ut fugiat, assumenda aliquam deserunt eius officia vitae unde corrupti rem non magni id pariatur at."
        ]
    ];

    public static function aboutMe() {
        return self::$about;
    }
}
