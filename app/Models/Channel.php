<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Channel extends Model
{
    use HasFactory,UsesUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Relation channel to channelEpisode
     */
    public function channelEpisodes()
    {
        return $this->hasMany(ChannelEpisode::class);
    }

    /**
     * Relation channel to channelGenre
     */
    public function channelGenres()
    {
        return $this->hasMany(ChannelGenre::class);
    }

    /**
     * Relation channel to userChannel
     */
    public function userChannels()
    {
        return $this->hasMany(UserChannel::class);
    }
}
