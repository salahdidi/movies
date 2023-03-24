<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserActivity
 * 
 * @property int $activity_id
 * @property int|null $user_id
 * @property Carbon|null $date_activity
 * @property Carbon|null $date_day
 * @property bool|null $news
 * @property bool|null $recette
 * @property bool|null $catalogue
 * @property bool|null $game
 * @property int|null $device_id
 * @property int|null $duration
 *
 * @package App\Models
 */
class UserActivity extends Model
{
	protected $table = 'user_activity';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'activity_id' => 'int',
		'user_id' => 'int',
		'news' => 'bool',
		'recette' => 'bool',
		'catalogue' => 'bool',
		'game' => 'bool',
		'device_id' => 'int',
		'duration' => 'int'
	];

	protected $dates = [
		'date_activity',
		'date_day'
	];

	protected $fillable = [
		'activity_id',
		'user_id',
		'date_activity',
		'date_day',
		'news',
		'recette',
		'catalogue',
		'game',
		'device_id',
		'duration'
	];
}
