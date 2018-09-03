<?php

declare(strict_types = 1);

namespace JuridicoApp;

class HolaMundo {

    public function __invoke(): void {
        echo 'Hola Mundo! Haciendo pruebas de las nuevas cosas de PHP.';
        exit;
    }

}
