<?php

namespace Alura\Solid\Model;

final class Slug
{
    private $slug;

    public function __construct(string $conteudo)
    {
        $this->slug = 'http://videos.alura.com.br/' . str_replace(' ', '-', strtolower($conteudo));
    }

    public function __toString(): string
    {
        return $this->slug;
    }
}