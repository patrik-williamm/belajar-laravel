<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home
{
    private static $home = [
        [
            "home" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, cupiditate. Provident, totam in fuga commodi eum magni molestiae corrupti! Maxime repudiandae modi voluptates inventore cum doloremque, aut perspiciatis. Voluptas quaerat nemo ipsa officia similique reprehenderit omnis! Amet deleniti iusto autem ad, laudantium ratione harum repellat tempora veritatis error reiciendis. Velit consequuntur quo eveniet quia illum. Optio, laudantium! Magnam nisi amet voluptatem veritatis assumenda illo repellat itaque iste incidunt harum! Aliquam, nesciunt similique perferendis, amet nulla sint error tempora minus minima architecto officiis nemo necessitatibus vitae, et dignissimos a consectetur est culpa quos quisquam sapiente? Aliquid nostrum exercitationem architecto nemo incidunt veniam, dicta laborum et. Ullam aspernatur at, assumenda sequi impedit beatae eveniet dolor earum veritatis nulla iste pariatur. Modi, esse!"
        ]
    ];

    public static function show_home() {
        return collect(self::$home);
    }
}
