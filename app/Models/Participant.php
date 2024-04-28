<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'id',
        'chat_id',
        'user_id',
        'last_read_at',
    ];

    /**
     * Get the chat associated with the participant.
     */
    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }

    /**
     * Get the user associated with the participant.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
