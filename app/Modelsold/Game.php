<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 * 
 * @property int $game_id
 * @property string $game_designation
 * @property Carbon $date_debut
 * @property Carbon $date_fin
 * @property int $nb_gamers
 * @property int $nb_parties
 * @property int $total_duration
 * @property int $best_player
 * @property int $best_score
 *
 * @package App\Models
 */
class Game extends Model
{
	protected $table = 'game';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'nb_gamers' => 'int',
		'nb_parties' => 'int',
		'total_duration' => 'int',
		'best_player' => 'int',
		'best_score' => 'int'
	];

	protected $dates = [
		'date_debut',
		'date_fin'
	];

	protected $fillable = [
		'game_id',
		'game_designation',
		'date_debut',
		'date_fin',
		'nb_gamers',
		'nb_parties',
		'total_duration',
		'best_player',
		'best_score'
	];
}
