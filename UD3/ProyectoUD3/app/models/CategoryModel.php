<?php
namespace App\Models;

class CategoryModel
{
    public static function getAllGames()
    {
        // Definimos un array estático de juegos, simulando datos de una base de datos
        return [
            ["title" => "The Legend of Zelda", "platform" => "Nintendo Switch", "genre" => "Aventura", "price" => 59.99, "image" => "assets/images/adventure/zelda.jpg"],
            ["title" => "God of War", "platform" => "PlayStation 5", "genre" => "Acción", "price" => 49.99, "image" => "assets/images/action/godofwar.jpg"],
            ["title" => "Halo Infinite", "platform" => "Xbox Series X", "genre" => "Disparos", "price" => 39.99, "image" => "assets/images/halo.jpg"],
            ["title" => "Minecraft", "platform" => "Multiplataforma", "genre" => "Sandbox", "price" => 29.99, "image" => "assets/images/minecraft.jpg"],
            ["title" => "Cyberpunk 2077", "platform" => "PC", "genre" => "RPG", "price" => 44.99, "image" => "assets/images/rpg/cyberpunk.jpg"],
            ["title" => "Fortnite", "platform" => "Multiplataforma", "genre" => "Battle Royale", "price" => 0.00, "image" => "assets/images/fortnite.jpg"],
            ["title" => "Assassin's Creed Valhalla", "platform" => "PlayStation 5", "genre" => "Aventura", "price" => 59.99, "image" => "assets/images/adventure/valhalla.jpg"],
            ["title" => "Gears 5", "platform" => "Xbox Series X", "genre" => "Disparos", "price" => 34.99, "image" => "assets/images/gears5.jpg"],
            ["title" => "Stardew Valley", "platform" => "PC", "genre" => "Simulación", "price" => 14.99, "image" => "assets/images/stardewvalley.jpg"],
            ["title" => "Animal Crossing: New Horizons", "platform" => "Nintendo Switch", "genre" => "Simulación", "price" => 49.99, "image" => "assets/images/animalcrossing.jpeg"],
            ["title" => "FIFA 25", "platform" => "Multiplataforma", "genre" => "Deportes", "price" => 59.99, "image" => "assets/images/sports/fifa25.jpg"],
            ["title" => "Dark Souls III", "platform" => "PC", "genre" => "RPG", "price" => 39.99, "image" => "assets/images/rpg/darksouls3.jpg"],
            ["title" => "Apex Legends", "platform" => "Multiplataforma", "genre" => "Battle Royale", "price" => 0.00, "image" => "assets/images/apexlegends.jpg"],
            ["title" => "Super Mario Odyssey", "platform" => "Nintendo Switch", "genre" => "Aventura", "price" => 49.99, "image" => "assets/images/adventure/marioodyssey.jpg"],
            ["title" => "Forza Horizon 5", "platform" => "Xbox Series X", "genre" => "Carreras", "price" => 59.99, "image" => "assets/images/forza5.jpg"],
            ["title" => "Gran Turismo 7", "platform" => "PlayStation 5", "genre" => "Carreras", "price" => 59.99, "image" => "assets/images/granturismo7.jpg"],
            ["title" => "League of Legends", "platform" => "PC", "genre" => "MOBA", "price" => 0.00, "image" => "assets/images/lol.jpg"],
            ["title" => "Overwatch", "platform" => "Multiplataforma", "genre" => "Disparos", "price" => 19.99, "image" => "assets/images/overwatch.jpg"],
            ["title" => "NBA 2K25", "platform" => "Multiplataforma", "genre" => "Deportes", "price" => 59.99, "image" => "assets/images/sports/nba2k25.jpg"],
            ["title" => "Hades", "platform" => "PC", "genre" => "RPG", "price" => 24.99, "image" => "assets/images/rpg/hades.jpg"],
            ["title" => "Gears Tactics", "platform" => "Xbox Series X", "genre" => "Estrategia", "price" => 39.99, "image" => "assets/images/strategy/gearstactics.jpg"],
            ["title" => "Fire Emblem: Three Houses", "platform" => "Nintendo Switch", "genre" => "Estrategia", "price" => 59.99, "image" => "assets/images/strategy/fireemblem.jpg"],
            ["title" => "The Witcher 3", "platform" => "Multiplataforma", "genre" => "RPG", "price" => 29.99, "image" => "assets/images/rpg/witcher3.jpg"],
            ["title" => "Diablo III", "platform" => "Multiplataforma", "genre" => "RPG", "price" => 19.99, "image" => "assets/images/rpg/diablo3.jpg"],
            ["title" => "Age of Empires IV", "platform" => "PC", "genre" => "Estrategia", "price" => 59.99, "image" => "assets/images/strategy/ageofempires4.jpg"],
            ["title" => "Halo Wars 2", "platform" => "Xbox Series X", "genre" => "Estrategia", "price" => 34.99, "image" => "assets/images/strategy/halowars2.jpeg"]
        
        ];
    }

    public static function getGenres()
    {
    // Definimos un array estático de géneros
    return [
        // Array de géneros | Utilizado en la página de categorías
        ["title" => "Acción", "description" => "Intensas aventuras llenas de desafíos."],
        ["title" => "Aventura", "description" => "Explora mundos y resuelve misterios."],
        ["title" => "Deportes", "description" => "Emoción de los deportes populares."],
        ["title" => "Estrategia", "description" => "Toma decisiones estratégicas."],
        ["title" => "RPG", "description" => "Historias inmersivas y personajes personalizados."]
    ];

    }

    public static function getConsoles()
    {
    // Definimos un array estático de consolas
    return [
        // Array de consolas | Utilizado en la página de categorías
        ["title" => "PlayStation 5", "description" => "Juegos exclusivos y multiplataforma."],
        ["title" => "Xbox Series X", "description" => "Juegos de gran rendimiento en Xbox."],
        ["title" => "Nintendo Switch", "description" => "Juegos portátiles y exclusivos."],
        ["title" => "PC", "description" => "Juegos de alta calidad y personalización."],
        ["title" => "Multiplataforma", "description" => "Juegos disponibles en varias consolas."],
    ];
    }
}