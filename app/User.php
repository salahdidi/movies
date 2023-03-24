<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $user_derniere_cnx
 * @property bool|null $is_default
 * @property int|null $user_role_id
 * @property int|null $entreprise_id
 * @property int|null $contact_id
 * @property bool|null $user_active
 * @property int|null $user_contact_id
 * @property int|null $groupe_id
 */
class User extends Authenticatable
{
    protected $table = 'users';

    protected $casts = [
        'current_team_id' => 'int',
        'is_default' => 'bool',
        'user_role_id' => 'int',
        'entreprise_id' => 'int',
        'contact_id' => 'int',
        'user_active' => 'bool',
        'user_contact_id' => 'int',
        'groupe_id' => 'int',
    ];

    protected $dates = [
        'email_verified_at',
        'user_derniere_cnx',
    ];

    protected $hidden = [
        'password',
        'two_factor_secret',
        'remember_token',
    ];

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'remember_token',
        'current_team_id',
        'profile_photo_path',
        'user_derniere_cnx',
        'is_default',
        'user_role_id',
        'entreprise_id',
        'contact_id',
        'user_active',
        'user_contact_id',
        'groupe_id',
    ];
}
