<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GeoMobileSim
 * 
 * @property string $serial_number
 * @property string|null $numero_telephone
 * @property int $operator_id
 * @property string|null $numero_compte
 * @property Carbon $date_1ere_activation
 * @property int $sim_type
 * @property int $current_id_tracker
 * @property int $current_status
 * @property Carbon $current_status_from_date
 * @property GeoMobileOperator $geoMobileOperator
 * @property GeoTracker $geoTracker
 * @package App\Models
 */
class GeoMobileSim extends Model
{
	protected $table = 'geo_mobile_sim';
	protected $primaryKey = 'serial_number';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'operator_id' => 'int',
		'sim_type' => 'int',
		'current_id_tracker' => 'int',
		'current_status' => 'int'
	];

	protected $dates = [
		'date_1ere_activation',
		'current_status_from_date'
	];

	protected $fillable = [
		'numero_telephone',
		'operator_id',
		'numero_compte',
		'date_1ere_activation',
		'sim_type',
		'current_id_tracker',
		'current_status',
		'current_status_from_date'
	];

	public function geoMobileOperator()
	{
		return $this->belongsTo(GeoMobileOperator::class, 'operator_id');
	}
	public function geoTracker()
	{
		return $this->belongsTo(GeoTracker::class, 'current_id_tracker');
	}
}
