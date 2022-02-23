<?php

namespace App\Models;

class Post {

    static $blog_posts = [
        [
            "title" => "Pesawat ku yang terbang",
            "slug" => "Pesawat-ku-yang-terbang",
            "author" => "patrik william",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quis autem officia totam, mollitia reiciendis. Ut rem sit eaque nisi accusantium officia rerum nihil, molestiae ea sapiente commodi ipsam dicta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eligendi facilis eius laborum illo vel maiores nihil maxime totam! Deleniti temporibus quos assumenda harum magni sit neque necessitatibus dolorem sapiente? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis, necessitatibus tempora ullam atque ad ut deserunt eos voluptatem earum, vel doloribus nemo molestias id suscipit. Aut, ipsum? Voluptates, quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo voluptatum nesciunt nisi error, inventore qui non rerum magnam natus nihil ea vel, debitis facere doloremque repellat sed quisquam laudantium."
        ],
        [
            "title" => "Hati ku hilang kendali",
            "slug" => "Hati-ku-hilang-kendali",
            "author" => "Rian james",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quis autem officia totam, mollitia reiciendis. Ut rem sit eaque nisi accusantium officia rerum nihil, molestiae ea sapiente commodi ipsam dicta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eligendi facilis eius laborum illo vel maiores nihil maxime totam! Deleniti temporibus quos assumenda harum magni sit neque necessitatibus dolorem sapiente? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis, necessitatibus tempora ullam atque ad ut deserunt eos voluptatem earum, vel doloribus nemo molestias id suscipit. Aut, ipsum? Voluptates, quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo voluptatum nesciunt nisi error, inventore qui non rerum magnam natus nihil ea vel, debitis facere doloremque repellat sed quisquam laudantium."
        ],
        [
            "title" => "Aku punya pacar",
            "slug" => "Aku-punya-pacar",
            "author" => "Muh Fikri",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quis autem officia totam, mollitia reiciendis. Ut rem sit eaque nisi accusantium officia rerum nihil, molestiae ea sapiente commodi ipsam dicta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eligendi facilis eius laborum illo vel maiores nihil maxime totam! Deleniti temporibus quos assumenda harum magni sit neque necessitatibus dolorem sapiente? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis, necessitatibus tempora ullam atque ad ut deserunt eos voluptatem earum, vel doloribus nemo molestias id suscipit. Aut, ipsum? Voluptates, quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo voluptatum nesciunt nisi error, inventore qui non rerum magnam natus nihil ea vel, debitis facere doloremque repellat sed quisquam laudantium."
        ]
    ];

    public static function all() {
        return self::$blog_posts;
    }

    public static function find($slug) {
        $post = [];
        $posts = self::$blog_posts;
        foreach($posts as $p) {
            if($p['slug'] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}
