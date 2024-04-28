<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */

namespace App\Models{
    /**
     * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|BaseModel query()
     */
    class BaseModel extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Message> $messages
     * @property-read int|null $messages_count
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Participant> $participants
     * @property-read int|null $participants_count
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
     * @property-read int|null $users_count
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Chat newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Chat newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Chat query()
     * @method static \Illuminate\Database\Eloquent\Builder|Chat whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Chat whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Chat whereUpdatedAt($value)
     */
    class Chat extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * @property int $id
     * @property int $chat_id
     * @property int $user_id indicating who sent the message
     * @property string $message
     * @property string $status sent, delivered, seen
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\Chat $chat
     * @property-read \App\Models\User $user
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Message query()
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereChatId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereMessage($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereStatus($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereUserId($value)
     */
    class Message extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * @property int $id
     * @property int $chat_id
     * @property int $user_id
     * @property string|null $last_read_at
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\Chat $chat
     * @property-read \App\Models\User $user
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Participant newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Participant newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Participant query()
     * @method static \Illuminate\Database\Eloquent\Builder|Participant whereChatId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Participant whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Participant whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Participant whereLastReadAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Participant whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Participant whereUserId($value)
     */
    class Participant extends \Eloquent
    {
    }
}

namespace App\Models{
    /**
     * @property int $id
     * @property string $name
     * @property string|null $email
     * @property string|null $phone_number
     * @property \Illuminate\Support\Carbon|null $email_verified_at
     * @property mixed $password
     * @property string|null $two_factor_secret
     * @property string|null $two_factor_recovery_codes
     * @property string|null $two_factor_confirmed_at
     * @property string|null $remember_token
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
     * @property-read int|null $notifications_count
     *
     * @method static \Database\Factories\UserFactory factory(Model$count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User query()
     * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
     *
     * @mixin \Eloquent
     *
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Chat> $chats
     * @property-read int|null $chats_count
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Participant> $participants
     * @property-read int|null $participants_count
     */
    class User extends \Eloquent
    {
    }
}
