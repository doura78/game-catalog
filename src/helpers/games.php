<?php

function getAllGames() : array {
    //1. Path jusqu'aux jeux
    $path = __DIR__ . "/../../data/games.json";

    //2. Lire le fichier
    $json = file_get_contents($path);

    //3. Récuperer les jeux en tableau
    if ($json === false) {
        return [];
    }
    else {
        $data = json_decode($json, true);
    }
    // Retourne les jeux
    return is_array($data) ? $data : [];
}

function getGameById(int $id) : ?array {
    foreach (getAllGames() as $gameById) {
        if ((int)($gameById["id"] ?? 0) === (int)$id) {
            return $gameById;
        }
    }
    //    return array_find(getAllGames(), fn($gameByI) => (int)($gameByI["id"] ?? 0) === (int)$id);
    return null;
}