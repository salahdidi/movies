<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GeoTrackerDevice
 * 
 * @property int $serial
 * @property int $imei
 *
 * @package App\Models
 */
class GeoTrackerDevice extends Model
{
	protected $table = 'geo_tracker_device';
	protected $primaryKey = 'serial';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'serial' => 'int',
		'imei' => 'int'
	];

	protected $fillable = [
		'imei'
	];
}
