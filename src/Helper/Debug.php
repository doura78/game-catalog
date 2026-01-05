<?php

namespace Helper;

final class Debug {

    public static function dump_block(string $title, $value): void { // static permet d'acceder à la functuion sans avoir besoin de l'instancier (new=...)
        echo"<h2 style='margin: 16px; color: red;'>";
        echo $title;
        echo "</h2>";
        var_dump($value);
    }
}

