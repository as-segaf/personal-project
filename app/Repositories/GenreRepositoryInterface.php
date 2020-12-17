<?php

namespace App\Repositories;

interface GenreRepositoryInterface
{
    public function all();

    public function findById($genre_id);
}
