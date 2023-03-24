<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * 
 * @property int $contact_id
 * @property string $contact_name
 * @property string $contact_surname
 * @property string $contact_company
 * @property int $commune_id
 * @property int $wilaya_id
 * @property string $contact_latitude
 * @property string $contact_longitude
 * 
 * @property Collection|GeoMobileOperator[] $geo_mobile_operators
 *
 * @package App\Models
 */
class Contact extends Model
{
	protected $table = 'contact';
	protected $primaryKey = 'contact_id';
	public $timestamps = false;

	protected $casts = [
		'commune_id' => 'int',
		'wilaya_id' => 'int'
	];

	protected $fillable = [
		'contact_name',
		'contact_surname',
		'contact_company',
		'commune_id',
		'wilaya_id',
		'contact_latitude',
		'contact_longitude'
	];

	public function geo_mobile_operators()
	{
		return $this->hasMany(GeoMobileOperator::class, 'operator_contact_id');
	}
}
