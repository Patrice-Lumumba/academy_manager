<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Salle
 * 
 * @property string $num_salle
 * @property int $nb_place
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Salle extends Model
{
	protected $table = 'salle';
	protected $primaryKey = 'num_salle';
	public $incrementing = false;

	protected $casts = [
		'nb_place' => 'int'
	];

	protected $fillable = [
		'nb_place'
	];
}
