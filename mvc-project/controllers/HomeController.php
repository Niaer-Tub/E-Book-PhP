<?php
require_once __DIR__ . '/../models/User.php';

class HomeController {
    public function index() {
        $userModel = new User();
        $users = $userModel->getAllUsers();

        // panggil view
        include __DIR__ . '/../views/home.php';
    }
}
