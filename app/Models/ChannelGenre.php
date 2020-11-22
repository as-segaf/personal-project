<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelGenre extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'channel_id',
        'genre_id',
    ];

    /**
     * Relation channelGenre to channel
     */
    public function channel()
    {
        //
    }

    /**
     * Relation channelGenre to genre
     */
    public function genre()
    {
        //
    }
}
