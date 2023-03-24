<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GeoMobileSimTracker
 * 
 * @property int $serial_number
 * @property int $id_tracker
 * @property Carbon $date_start
 * @property Carbon $date_end
 * @property GeoMobileSim $geoMobileSim
 * @property GeoTracker $geoTracker
 * @package App\Models
 */
class GeoMobileSimTracker extends Model
{
	protected $table = 'geo_mobile_sim_tracker';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'serial_number' => 'int',
		'id_tracker' => 'int'
	];

	protected $dates = [
		'date_start',
		'date_end'
	];

	public function geoMobileSim()
	{
		return $this->belongsTo(GeoMobileSim::class, 'serial_number');
	}
	public function geoTracker()
	{
		return $this->belongsTo(GeoTracker::class, 'id_tracker');
	}
}
