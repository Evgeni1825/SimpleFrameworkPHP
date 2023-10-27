<?php

namespace App\Application\Database;

interface ModelInterface
{
    public function find(string $column, mixed $value, bool $many = false): array|bool;

    public function store(): void;
}