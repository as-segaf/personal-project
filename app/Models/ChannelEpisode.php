<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelEpisode extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'channel_id',
        'episode_id'
    ];

    /**
     * Relation channelEpisode to channel
     */
    public function channel()
    {
        //
    }

    /**
     * Relation channelEpisode to episode
     */
    public function episode()
    {
        //
    }
}
