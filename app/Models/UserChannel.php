<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChannel extends Model
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
     * Relation userChannel to user
     */
    public function user()
    {
        //
    }

    /**
     * Relation userChannel to user
     */
    public function channel()
    {
        //
    }
}
