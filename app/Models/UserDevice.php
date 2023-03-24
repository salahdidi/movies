<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserDevice
 * 
 * @property int $user_id
 * @property string $device_id
 * @property Carbon $date_first_use
 * @property Carbon $date_last_use
 *
 * @package App\Models
 */
class UserDevice extends Model
{
	protected $table = 'user_device';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'date_first_use',
		'date_last_use'
	];

	protected $fillable = [
		'user_id',
		'device_id',
		'date_first_use',
		'date_last_use'
	];
}
