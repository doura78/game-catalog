<?php

namespace Core;

use JetBrains\PhpStorm\NoReturn;

final class Response {
    public function render (string $view, array $data = [], int $status = 200) : void {
        http_response_code($status);
        extract($data);
        require __DIR__ . '/../../views/partials/header.php'; // Header
        require __DIR__ . '/../../views/pages/' . $view . '.php';
        require __DIR__ . '/../../views/partials/footer.php'; // Footer
    }

    #[NoReturn]
    public function redirect (string $to, int $status = 302) : void {
        header('Location: ' . $to, true, $status );
        exit;
    }

    public function json (mixed $data, int $status = 200) : void{
        // 1.définir le code HTTP de la réponse.
        http_response_code($status);
        // 2.Spécifier que ce sera au format JSON
        header('content-type: application/json; charset=utf-8');
        // 3.Convertir les données en JSON
        echo json_encode($data);
}

}

