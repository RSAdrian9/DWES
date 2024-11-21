<?php
namespace App\Controllers;

use App\Core\Controller;

class UserController extends Controller {
    public function list() {
        $users = [
            ['id' => 1, 'name' => 'Alice'],
            ['id' => 2, 'name' => 'Bob'],
        ];
        $this->view('users', ['users' => $users]);
    }
}

?>