<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GeoVehicle
 * 
 * @property int $vehicle_id
 * @property int $client_id
 * @property int $vehicle_category_id
 * @property int $vehicle_type_id
 * @property string|null $vehicle_type
 * @property int $vehicle_class_id
 * @property string $designation
 * @property int $marque_id
 * @property string $modele
 * @property string $matricule
 * @property string $numero_chassis
 * @property Carbon $date_derniere_installation
 * @property string|null $vehicle_photo
 * @property string|null $icone
 * @property int|null $id_tracker
 * @property int $default_driver_id
 * @property int $is_fuel_meter_installed
 * @property string $unite_carburan
 * @property int $reservoir_capacite
 * @property int $reservoir_resistance_max
 * @property float $reservoir_min
 * @property float $reservoir_max
 * @property int $reservoir_signe
 * @property int $reservoir_actual_percent
 * @property int $reservoir_actual_liters
 * @property int $is_frigo_installed
 * @property int $frigo_type
 * @property float $frigo_volt_at_zero
 * @property float $frigo_volt_step_for_degree
 * @property int $frigo_signe
 * @property int $max_authorized_speed
 * @property int $hidden
 * @property int $depot_id
 * @property string $fueltank_type_id
 * @property int $wastage_duration
 * @property bool $billing_status
 * @property int $billing_client_id
 * @property Contact $contact
 * @package App\Models
 */
class GeoVehicle extends Model
{
	protected $table = 'geo_vehicle';
	protected $primaryKey = 'vehicle_id';
	public $timestamps = false;

	protected $casts = [
		'client_id' => 'int',
		'vehicle_category_id' => 'int',
		'vehicle_type_id' => 'int',
		'vehicle_class_id' => 'int',
		'marque_id' => 'int',
		'id_tracker' => 'int',
		'default_driver_id' => 'int',
		'is_fuel_meter_installed' => 'int',
		'reservoir_capacite' => 'int',
		'reservoir_resistance_max' => 'int',
		'reservoir_min' => 'float',
		'reservoir_max' => 'float',
		'reservoir_signe' => 'int',
		'reservoir_actual_percent' => 'int',
		'reservoir_actual_liters' => 'int',
		'is_frigo_installed' => 'int',
		'frigo_type' => 'int',
		'frigo_volt_at_zero' => 'float',
		'frigo_volt_step_for_degree' => 'float',
		'frigo_signe' => 'int',
		'max_authorized_speed' => 'int',
		'hidden' => 'int',
		'depot_id' => 'int',
		'wastage_duration' => 'int',
		'billing_status' => 'bool',
		'billing_client_id' => 'int'
	];

	protected $dates = [
		'date_derniere_installation'
	];

	protected $fillable = [
		'client_id',
		'vehicle_category_id',
		'vehicle_type_id',
		'vehicle_type',
		'vehicle_class_id',
		'designation',
		'marque_id',
		'modele',
		'matricule',
		'numero_chassis',
		'date_derniere_installation',
		'vehicle_photo',
		'icone',
		'id_tracker',
		'default_driver_id',
		'is_fuel_meter_installed',
		'unite_carburan',
		'reservoir_capacite',
		'reservoir_resistance_max',
		'reservoir_min',
		'reservoir_max',
		'reservoir_signe',
		'reservoir_actual_percent',
		'reservoir_actual_liters',
		'is_frigo_installed',
		'frigo_type',
		'frigo_volt_at_zero',
		'frigo_volt_step_for_degree',
		'frigo_signe',
		'max_authorized_speed',
		'hidden',
		'depot_id',
		'fueltank_type_id',
		'wastage_duration',
		'billing_status',
		'billing_client_id'
	];

	public function contact()
	{
		return $this->belongsTo(Contact::class, 'client_id');
	}
	
}
