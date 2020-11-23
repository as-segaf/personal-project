<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcription extends Model
{
    use HasFactory,UsesUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'channel_id',
    ];

    /**
     * Relation subcription to user
     */
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }

    /**
     * Relation subcription to channel
     */
    public function channel()
    {
        return $this->belongsToMany(Channel::class, 'channel_id');
    }
}
