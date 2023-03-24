<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GeoTrackerInstall
 * 
 * @property int $id_tracker
 * @property int $vehicle_id
 * @property Carbon $date_installation
 * @property Carbon $date_uninstall
 *
 * @package App\Models
 */
class GeoTrackerInstall extends Model
{
	protected $table = 'geo_tracker_install';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_tracker' => 'int',
		'vehicle_id' => 'int'
	];

	protected $dates = [
		'date_installation',
		'date_uninstall'
	];

	protected $fillable = [
		'id_tracker',
		'vehicle_id',
		'date_installation',
		'date_uninstall'
	];
}
