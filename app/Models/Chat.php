<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chat extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'id',
    ];

    /**
     * The messages that belong to the chat.
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    /**
     * The participants that belong to the chat.
     */
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    /**
     * The users that belong to the chat via participants.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'participants');
    }
}
