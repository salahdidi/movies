<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Publicite
 * 
 * @property int $publicite_id
 * @property string|null $publicite_deisgnation
 * @property string|null $banniere_img
 * @property int|null $type_id
 * @property int|null $nb_clics
 * @property int|null $nb_vues
 * @property bool|null $actif
 * @property Carbon|null $date_debut
 * @property Carbon|null $date_fin
 *
 * @package App\Models
 */
class Publicite extends Model
{
	protected $table = 'publicite';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'publicite_id' => 'int',
		'type_id' => 'int',
		'nb_clics' => 'int',
		'nb_vues' => 'int',
		'actif' => 'bool'
	];

	protected $dates = [
		'date_debut',
		'date_fin'
	];

	protected $fillable = [
		'publicite_id',
		'publicite_deisgnation',
		'banniere_img',
		'type_id',
		'nb_clics',
		'nb_vues',
		'actif',
		'date_debut',
		'date_fin'
	];
}
