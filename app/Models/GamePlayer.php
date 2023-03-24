<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GamePlayer
 * 
 * @property int $game_id
 * @property int $player_id
 * @property int $score
 * @property int $duration
 *
 * @package App\Models
 */
class GamePlayer extends Model
{
	protected $table = 'game_player';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'player_id' => 'int',
		'score' => 'int',
		'duration' => 'int'
	];

	protected $fillable = [
		'game_id',
		'player_id',
		'score',
		'duration'
	];
}
