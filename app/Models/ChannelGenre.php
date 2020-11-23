<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelGenre extends Model
{
    use HasFactory,UsesUuid;

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
        return $this->belongsToMany(Channel::class, 'channel_id');
    }

    /**
     * Relation channelGenre to genre
     */
    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'genre_id');
    }
}
