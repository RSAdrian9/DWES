<?php
namespace App\Controllers;
require_once __DIR__ . '/../models/HomeModel.php';

use App\Models\HomeModel;

class HomeController {
    public function index() {
        // Obtener los juegos desde el modelo
        $games = HomeModel::getHomeGames();

        // Renderizar la vista home.php con los datos
        $this->render('home', ['games' => $games]);
    }

    private function render($view, $data = []) {
        // Convierte las claves del array en variables
        extract($data);
        // Incluir la vista correspondiente
        include __DIR__ . '/../views/' . $view . '.php';
    }
}
