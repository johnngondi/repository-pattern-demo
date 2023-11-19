<?php

namespace App\Repositories;

use App\Contracts\PostRepositoryContract;
use Illuminate\Support\Collection;

class ArrayPostRepository implements PostRepositoryContract
{

    public function all(): Collection
    {
        $posts = [
            [
                'title' => 'My Post',
                'slug' => 'my-post',
                'body' => 'Lorem ipsum...'
            ],
            [
                'title' => 'Another Post',
                'slug' => 'another-post',
                'body' => 'Lorem ipsum...'
            ],
        ];

        return collect($posts);
    }

    public function getBy(array $conditions = []): Collection
    {
        return collect([
            [
                'title' => 'My Post',
                'slug' => 'my-post',
                'body' => 'Lorem ipsum...'
            ],
        ]);
    }

    public function create(array $attributes): object
    {
        return (object)[
            'title' => 'My Post',
            'slug' => 'my-post',
            'body' => 'Lorem ipsum...'
        ];
    }

    public function update(int $id, array $attributes): object
    {
        return (object)[
            'title' => 'My Post',
            'slug' => 'my-post',
            'body' => 'Lorem ipsum...'
        ];
    }

    public function delete(int $id): object
    {
        return (object)[
            'title' => 'My Post',
            'slug' => 'my-post',
            'body' => 'Lorem ipsum...'
        ];
    }
}
