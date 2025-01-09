<?php
namespace App\Controllers;
require_once __DIR__ . '/../models/CategoryModel.php';

use App\Models\CategoryModel;

class CategoryController {
    public function categories() {
        // Obtén géneros y consolas desde el modelo
        $genres = CategoryModel::getGenres();
        $consoles = CategoryModel::getConsoles();

        // Renderiza la vista categories.php con los datos
        $this->render('categories', ['genres' => $genres, 'consoles' => $consoles]);
    }

    private function render($view, $data = []) {
        extract($data); // Convierte las claves del array en variables
        include __DIR__ . '/../views/' . $view . '.php';
    }

    public function gamesByCategory($categoria) {
        $allGames = CategoryModel::getAllGames();
        $filteredGames = array_filter($allGames, function($game) use ($categoria) {
            return $game['platform'] === $categoria || $game['genre'] === $categoria;
        });
    
        // Renderiza la vista 'games.php' con los juegos filtrados
        $this->render('games', [
            'games' => $filteredGames,
            'categoria' => $categoria,
        ]);
    }
    
    
}
