<?php

namespace App\Repositories;

interface ChannelGenreRepositoryInterface
{
    public function getChannelByGenre($genre_id);
}
