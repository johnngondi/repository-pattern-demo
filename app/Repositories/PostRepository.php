<?php

namespace App\Repositories;

use App\Contracts\PostRepositoryContract;
use App\Models\Post;
use Illuminate\Support\Collection;

class PostRepository implements PostRepositoryContract
{

    public function all(): Collection
    {
        return Post::latest()->get();
    }

    public function getBy(array $conditions): Collection
    {
        return Post::query()->where($conditions)->get();
    }

    public function create(array $attributes): object
    {
        $post = new Post($attributes);
        $post->save();

        return $post;
    }

    public function update(int $id, array $attributes): object
    {
        // TODO: Implement update() method.
        //We will return empty post as an example
        return new Post();
    }

    public function delete(int $id): object
    {
        // TODO: Implement delete() method.
        //We will return empty post as an example
        return new Post();
    }
}
