<?php

namespace App\Repositories;

use App\Models\Genre;

class GenreRepository implements GenreRepositoryInterface
{
    private $channelGenre;

    public function __construct(ChannelGenreRepository $channelGenreRepository)
    {
        $this->channelGenre = $channelGenreRepository;
    }

    public function all()
    {
        return Genre::orderBy('name')
            ->with('channelGenre', 'channelGenre.channel')
            ->get()
            ->map(function($genre) {
                return [
                    'genre_id' => $genre->id,
                    'name' => $genre->name,
                    'description' => $genre->description
                ];
            });
    }

    public function findById($genre)
    {
        return Genre::where('id', $genre->id)
            ->get()
            ->map(function($genres){
                return [
                    'genre_id' => $genres->id,
                    'name' => $genres->name,
                    'description' => $genres->description,
                    'channel' => $this->channelGenre->getChannelByGenre($genres->id),
                ];
            });
    }
}
