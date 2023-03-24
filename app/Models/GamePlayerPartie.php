<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GamePlayerPartie
 * 
 * @property int $partie_id
 * @property int $game_id
 * @property int $player_id
 * @property int $produit_id
 * @property Carbon $date_debut
 * @property Carbon $date_fin
 * @property int $score
 * @property int $duration
 *
 * @package App\Models
 */
class GamePlayerPartie extends Model
{
	protected $table = 'game_player_partie';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'partie_id' => 'int',
		'game_id' => 'int',
		'player_id' => 'int',
		'produit_id' => 'int',
		'score' => 'int',
		'duration' => 'int'
	];

	protected $dates = [
		'date_debut',
		'date_fin'
	];

	protected $fillable = [
		'partie_id',
		'game_id',
		'player_id',
		'produit_id',
		'date_debut',
		'date_fin',
		'score',
		'duration'
	];
}
