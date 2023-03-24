<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recette
 * 
 * @property int $recette_id
 * @property string|null $recette_designation
 * @property string|null $recette_detail
 * @property Carbon|null $date_publication
 * @property bool|null $actif
 * @property string|null $recette_img
 *
 * @package App\Models
 */
class Recette extends Model
{
	protected $table = 'recette';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'recette_id' => 'int',
		'actif' => 'bool'
	];

	protected $dates = [
		'date_publication'
	];

	protected $fillable = [
		'recette_id',
		'recette_designation',
		'recette_detail',
		'date_publication',
		'actif',
		'recette_img'
	];
}
