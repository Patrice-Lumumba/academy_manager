<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluation
 * 
 * @property string $note
 * @property string $code_mat
 * @property string $code_etud
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Evaluation extends Model
{
	protected $table = 'evaluation';
	public $incrementing = false;

	protected $fillable = [
		'note'
	];
}
