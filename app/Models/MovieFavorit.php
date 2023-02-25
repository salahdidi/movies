<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MovieFavorit
 * 
 * @property int|null $movie_id
 * @property int|null $user_id
 *
 * @package App\Models
 */
class MovieFavorit extends Model
{
	protected $table = 'movie_favorit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'movie_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'movie_id',
		'user_id'
	];
}
