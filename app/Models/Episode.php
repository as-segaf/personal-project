<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory,UsesUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 
        'description',
        'podcast',
        'cover_image',
    ];

    /**
     * Relation Episode to channelEpisode
     */
    public function channelEpisode()
    {
        return $this->hasOne(ChannelEpisode::class, 'channelEpisode_id');
    }
}
