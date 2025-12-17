<?php

require_once __DIR__ . "/../helpers/games.php";
require_once __DIR__ . "/../helpers/debug.php";
final class AppController
{ // final: interdit l'héritage, pas d'enfant possible
    public function handleRequest(): void
    {
        $page = $_GET['page'] ?? 'home';

        switch ($page) {
            case 'home':
                $this->home();
                break;
            default:
                // Implement logic...
        }
    }

    // Créer une fonction render - view (string), data (array) -- void

    private function render (string $view, array $data) : void {
        extract($data);
        require __DIR__ . "/../../views/pages/" . $view . ".php";
    }

        private function home() : void {
            // 1. Récuperer les 3 jeux.
            $games = getAllGames();
            $featuresGames = array_slice($games, 0, 3);


            //2 Rendre la vue.
            $this->render("home", [
                'featuredGames' => $featuresGames,
                'total' => count($games)
            ]);


    }


}