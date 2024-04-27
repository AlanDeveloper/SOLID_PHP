<?php

namespace Alura\Solid\Service;

use Alura\Solid\Interface\Assistivel;

class Assistidor
{
    public function assistir(Assistivel $conteudo): void
    {
        $conteudo->assistir();
    }
}
