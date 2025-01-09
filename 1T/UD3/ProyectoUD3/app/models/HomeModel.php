<?php
namespace App\Models;

class HomeModel
{
    public static function getHomeGames()
    {
        // Definimos un array estático de juegos, simulando datos de una base de datos
        return [
            [
                "title" => "The Legend of Zelda", 
                "platform" => "Nintendo Switch", 
                "price" => 59.99, 
                "image" => "assets/images/adventure/zelda.jpg"
            ],

            [
                "title" => "God of War", 
                "platform" => "PlayStation 5", 
                "price" => 49.99, 
                "image" => "assets/images/action/godofwar.jpg"
            ],

            [
                "title" => "Halo Infinite", 
                "platform" => "Xbox Series X", 
                "price" => 39.99, 
                "image" => "assets/images/halo.jpg"
            ],
            
            [
                "title" => "Minecraft", 
                "platform" => "Multiplataforma", 
                "price" => 29.99, 
                "image" => "assets/images/minecraft.jpg"
            ],

            [
                "title" => "Cyberpunk 2077", 
                "platform" => "PC", 
                "price" => 44.99, 
                "image" => "assets/images/rpg/cyberpunk.jpg"
            ],

            [
                "title" => "Fortnite", 
                "platform" => "Multiplataforma", 
                "price" => 0.00, 
                "image" => "assets/images/fortnite.jpg"
            ]
        ];
    }
}

