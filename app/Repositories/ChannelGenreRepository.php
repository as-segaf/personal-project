<?php

namespace App\Repositories;

use App\Models\ChannelGenre;

class ChannelGenreRepository
{
    public function getChannelByGenre($genre_id)
    {
        return ChannelGenre::where('genre_id', $genre_id)
            ->with('channel')
            ->get()
            ->map(function($channelGenre){
                return [
                    'channel_id' => $channelGenre->channel->id,
                    'name' => $channelGenre->channel->name,
                ];
            });
    }
}
