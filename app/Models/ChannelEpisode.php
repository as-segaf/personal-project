<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class ChannelEpisode extends Model
{
    use HasFactory,UsesUuid;

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
        return $this->belongsToMany(Channel::class, 'channel_id');
    }

    /**
     * Relation channelEpisode to episode
     */
    public function episode()
    {
        return $this->belongsTo(Episode::class, 'episode_id');
    }
}
