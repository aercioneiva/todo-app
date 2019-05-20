<?php
declare(strict_types=1);

namespace App\Domain;

// src/Domain/TodosRepository.php



namespace App\Domain;

interface TodosRepository
{
    public function getAll(): array;
}