<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcription extends Model
{
    use HasFactory;

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
    public function users()
    {
        //
    }

    /**
     * Relation subcription to channel
     */
    public function channels()
    {
        //
    }
}
