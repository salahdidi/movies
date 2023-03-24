<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GeoTracker
 * 
 * @property int $id_tracker
 * @property int|null $imei
 * @property int $vehicle_id
 * @property string $model_id
 * @property string $password
 * @property string $sim_serial_number
 * @property int $manufacturar_id
 * @property int $installateur
 * @property Carbon $date_installation
 * @property int $latest_id_trace
 * @property int $active
 * @property Carbon $latest_date_heartbeat_from_tracker
 * @property int $latest_cmd_received_from_tracker
 * @property Carbon $latest_date_received_from_tracker
 * @property Carbon $latest_date_send_to_tracker
 * @property Carbon $latest_date_report
 * @property int $is_tracking_time_interval
 * @property int $tracking_time_interval
 * @property int $tracking_time_max_wait
 * @property int $is_tracking_distance_interval
 * @property int $tracking_distance_interval
 * @property Carbon $date_first_server_connection
 * @property int $is_disconnection_reported
 * @property int $is_reconnection_reported
 * @property int $socket_to_be_reset
 * @property int $journey_init_value
 * @property int $visible
 * @property Carbon $latest_date
 * @property Carbon $latest_date_from_log
 * @property string|null $longitude
 * @property string|null $latitude
 * @property int $journey
 * @property string|null $old_longitude
 * @property string|null $old_latitude
 * @property int $old_journey
 * @property float $gprmc_speed
 * @property float $gprmc_heading_deg
 * @property int $is_alarm
 * @property string $alarme_code
 * @property string $alarme_description
 * @property int $digital_input_4
 * @property int $digital_input_2
 * @property int $csq
 * @property string $gprmc_gps_status
 * @property float $hdop
 * @property float $fuel_percent
 * @property float $fuel_liters
 * @property float $frigo_temperature
 * @property int $frigo_status
 * @property int $frigo_pcb
 * @property int $reset
 * @property string $latest_incomplete_buffer
 * @property int $mission_point_id
 * @property int|null $max_acceleration_value
 * @property int|null $max_deceleration_value
 * @property string|null $assisted_event_info
 * @property int|null $can_installed
 * @property int|null $can_data_exists
 * @property int|null $j1939_vehicle_speed_wheel
 * @property int|null $j1939_vehicle_speed_tachograph
 * @property int|null $j1939_clutch_switch
 * @property int|null $j1939_tachograph_performance
 * @property int|null $j1939_parking_brake_switch
 * @property int|null $j1939_cruise_control
 * @property int|null $j1939_accelerator_pedal_position
 * @property int|null $j1939_total_fuel_used
 * @property int|null $j1939_engine_speed
 * @property float|null $j1939_total_engine_hours
 * @property int|null $j1939_high_resolution_vehicle_distance
 * @property int|null $j1939_engine_coolant_temperature
 * @property int|null $j1939_fuel_level
 * @property int|null $j1939_actual_engine_torque
 * @property int|null $j1939_ambient_air_temperature
 * @property float|null $j1939_high_resolution_engine_total_fuel_used
 * @property int|null $j1939_load_at_current_speed
 * @property float|null $j1939_engine_fuel_rate
 * @property float|null $j1939_axle_weight
 * @property int|null $j1939_service_distance
 * @property float|null $j1939_instantaneous_fuel_economy
 * @property int $j1939_status_engine_brake
 * @property int $j1939_engine_oil_temperature
 * @property int $j1939_engine_fuel_temperature
 * @property int $j1939_total_vehicle_hours
 * @property int $j1939_trip_distance
 * @property int $j1939_engine_trip_fuel
 * @property int $j1939_percent_clutch_slip
 *
 * @package App\Models
 */
class GeoTracker extends Model
{
	protected $table = 'geo_tracker';
	protected $primaryKey = 'id_tracker';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_tracker' => 'int',
		'imei' => 'int',
		'vehicle_id' => 'int',
		'manufacturar_id' => 'int',
		'installateur' => 'int',
		'latest_id_trace' => 'int',
		'active' => 'int',
		'latest_cmd_received_from_tracker' => 'int',
		'is_tracking_time_interval' => 'int',
		'tracking_time_interval' => 'int',
		'tracking_time_max_wait' => 'int',
		'is_tracking_distance_interval' => 'int',
		'tracking_distance_interval' => 'int',
		'is_disconnection_reported' => 'int',
		'is_reconnection_reported' => 'int',
		'socket_to_be_reset' => 'int',
		'journey_init_value' => 'int',
		'visible' => 'int',
		'journey' => 'int',
		'old_journey' => 'int',
		'gprmc_speed' => 'float',
		'gprmc_heading_deg' => 'float',
		'is_alarm' => 'int',
		'digital_input_4' => 'int',
		'digital_input_2' => 'int',
		'csq' => 'int',
		'hdop' => 'float',
		'fuel_percent' => 'float',
		'fuel_liters' => 'float',
		'frigo_temperature' => 'float',
		'frigo_status' => 'int',
		'frigo_pcb' => 'int',
		'reset' => 'int',
		'mission_point_id' => 'int',
		'max_acceleration_value' => 'int',
		'max_deceleration_value' => 'int',
		'can_installed' => 'int',
		'can_data_exists' => 'int',
		'j1939_vehicle_speed_wheel' => 'int',
		'j1939_vehicle_speed_tachograph' => 'int',
		'j1939_clutch_switch' => 'int',
		'j1939_tachograph_performance' => 'int',
		'j1939_parking_brake_switch' => 'int',
		'j1939_cruise_control' => 'int',
		'j1939_accelerator_pedal_position' => 'int',
		'j1939_total_fuel_used' => 'int',
		'j1939_engine_speed' => 'int',
		'j1939_total_engine_hours' => 'float',
		'j1939_high_resolution_vehicle_distance' => 'int',
		'j1939_engine_coolant_temperature' => 'int',
		'j1939_fuel_level' => 'int',
		'j1939_actual_engine_torque' => 'int',
		'j1939_ambient_air_temperature' => 'int',
		'j1939_high_resolution_engine_total_fuel_used' => 'float',
		'j1939_load_at_current_speed' => 'int',
		'j1939_engine_fuel_rate' => 'float',
		'j1939_axle_weight' => 'float',
		'j1939_service_distance' => 'int',
		'j1939_instantaneous_fuel_economy' => 'float',
		'j1939_status_engine_brake' => 'int',
		'j1939_engine_oil_temperature' => 'int',
		'j1939_engine_fuel_temperature' => 'int',
		'j1939_total_vehicle_hours' => 'int',
		'j1939_trip_distance' => 'int',
		'j1939_engine_trip_fuel' => 'int',
		'j1939_percent_clutch_slip' => 'int'
	];

	protected $dates = [
		'date_installation',
		'latest_date_heartbeat_from_tracker',
		'latest_date_received_from_tracker',
		'latest_date_send_to_tracker',
		'latest_date_report',
		'date_first_server_connection',
		'latest_date',
		'latest_date_from_log'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'imei',
		'vehicle_id',
		'model_id',
		'password',
		'sim_serial_number',
		'manufacturar_id',
		'installateur',
		'date_installation',
		'latest_id_trace',
		'active',
		'latest_date_heartbeat_from_tracker',
		'latest_cmd_received_from_tracker',
		'latest_date_received_from_tracker',
		'latest_date_send_to_tracker',
		'latest_date_report',
		'is_tracking_time_interval',
		'tracking_time_interval',
		'tracking_time_max_wait',
		'is_tracking_distance_interval',
		'tracking_distance_interval',
		'date_first_server_connection',
		'is_disconnection_reported',
		'is_reconnection_reported',
		'socket_to_be_reset',
		'journey_init_value',
		'visible',
		'latest_date',
		'latest_date_from_log',
		'longitude',
		'latitude',
		'journey',
		'old_longitude',
		'old_latitude',
		'old_journey',
		'gprmc_speed',
		'gprmc_heading_deg',
		'is_alarm',
		'alarme_code',
		'alarme_description',
		'digital_input_4',
		'digital_input_2',
		'csq',
		'gprmc_gps_status',
		'hdop',
		'fuel_percent',
		'fuel_liters',
		'frigo_temperature',
		'frigo_status',
		'frigo_pcb',
		'reset',
		'latest_incomplete_buffer',
		'mission_point_id',
		'max_acceleration_value',
		'max_deceleration_value',
		'assisted_event_info',
		'can_installed',
		'can_data_exists',
		'j1939_vehicle_speed_wheel',
		'j1939_vehicle_speed_tachograph',
		'j1939_clutch_switch',
		'j1939_tachograph_performance',
		'j1939_parking_brake_switch',
		'j1939_cruise_control',
		'j1939_accelerator_pedal_position',
		'j1939_total_fuel_used',
		'j1939_engine_speed',
		'j1939_total_engine_hours',
		'j1939_high_resolution_vehicle_distance',
		'j1939_engine_coolant_temperature',
		'j1939_fuel_level',
		'j1939_actual_engine_torque',
		'j1939_ambient_air_temperature',
		'j1939_high_resolution_engine_total_fuel_used',
		'j1939_load_at_current_speed',
		'j1939_engine_fuel_rate',
		'j1939_axle_weight',
		'j1939_service_distance',
		'j1939_instantaneous_fuel_economy',
		'j1939_status_engine_brake',
		'j1939_engine_oil_temperature',
		'j1939_engine_fuel_temperature',
		'j1939_total_vehicle_hours',
		'j1939_trip_distance',
		'j1939_engine_trip_fuel',
		'j1939_percent_clutch_slip'
	];
}
