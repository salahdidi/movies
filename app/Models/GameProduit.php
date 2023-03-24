<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GameProduit
 * 
 * @property int $game_id
 * @property int $produit_id
 * @property int|null $nb_players
 * @property int|null $best_score
 * @property int|null $duration
 *
 * @package App\Models
 */
class GameProduit extends Model
{
	protected $table = 'game_produit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'game_id' => 'int',
		'produit_id' => 'int',
		'nb_players' => 'int',
		'best_score' => 'int',
		'duration' => 'int'
	];

	protected $fillable = [
		'game_id',
		'produit_id',
		'nb_players',
		'best_score',
		'duration'
	];
}
