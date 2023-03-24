<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GeoMobileOperator
 * 
 * @property int $operator_id
 * @property string $operator_designation
 * @property int $operator_contact_id
 * 
 * @property Contact $contact
 *
 * @package App\Models
 */
class GeoMobileOperator extends Model
{
	protected $table = 'geo_mobile_operator';
	protected $primaryKey = 'operator_id';
	public $timestamps = false;

	protected $casts = [
		'operator_contact_id' => 'int'
	];

	protected $fillable = [
		'operator_designation',
		'operator_contact_id'
	];

	public function contact()
	{
		return $this->belongsTo(Contact::class, 'operator_contact_id');
	}
}
