<?php

namespace receita;

class Receita
{
    private ?int $id;
    private string $descricao;
    private int $valor;
    private \DateTimeInterface $data;

    public function __construct(?int $id, string $descricao, int $valor, \DateTimeInterface $data)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->data = $data;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function descricao(): string
    {
        return $this->descricao;
    }

    public function valor(): int
    {
        return $this->valor;
    }

    public function data(): \DateTimeInterface
    {
        return $this->data;
    }
}