<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MCustomer
 * 
 * @property int $customer_id
 * @property string $customer_name
 * @property string $customer_surname
 * @property string|null $customer_company
 * @property int|null $commune_id
 * @property int|null $wilaya_id
 * @property string|null $customer_latitude
 * @property string|null $customer_longitude
 * @property int $client_id
 * @property int $id_default
 * @property int $is_invoiced_default
 *
 * @package App\Models
 */
class MCustomer extends Model
{
	protected $table = 'm_customer';
	protected $primaryKey = 'customer_id';
	public $timestamps = false;

	protected $casts = [
		'commune_id' => 'int',
		'wilaya_id' => 'int',
		'client_id' => 'int',
		'id_default' => 'int',
		'is_invoiced_default' => 'int'
	];

	protected $fillable = [
		'customer_name',
		'customer_surname',
		'customer_company',
		'commune_id',
		'wilaya_id',
		'customer_latitude',
		'customer_longitude',
		'client_id',
		'id_default',
		'is_invoiced_default'
	];
}
