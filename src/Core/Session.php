<?php

namespace Core;

use http\Exception\RuntimeException;

final class Session {
    public function __construct() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            throw new RuntimeException('Session is not started. Call session_start() to active it.');
        }
    }

    // On récupère la valeur
    public function get(string $key) : mixed {
        return $_SESSION[$key] ?? null;
    }

    // On assigne une valeur
    public function set(string $key, mixed $value) : void {
        $_SESSION[$key] = $value;
    }

    public function flash(string $key, mixed $value) : void {
        $_SESSION['flash_' . $key] = $value;
    }


    public function pullFlash(string $key) {
        $value = $_SESSION['flash_' . $key] ?? null;
        unset($_SESSION['flash_' . $key]);
        return $value;
    }
}
