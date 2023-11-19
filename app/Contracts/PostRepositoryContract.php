<?php

namespace App\Contracts;

use Illuminate\Support\Collection;

interface PostRepositoryContract
{
    public function all(): Collection;

    public function getBy(array $conditions): Collection;

    public function create(array $attributes): object;

    public function update(int $id, array $attributes): object;

    public function delete(int $id): object;
}
