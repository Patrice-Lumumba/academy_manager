<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Matiere
 * 
 * @property string $code_mat
 * @property string $label_mat
 * @property int $credit_mat
 * @property int $vh_mat
 * @property string $num_salle
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Matiere extends Model
{
	protected $table = 'matiere';
	protected $primaryKey = 'code_mat';
	public $incrementing = false;

	protected $casts = [
		'credit_mat' => 'int',
		'vh_mat' => 'int'
	];

	protected $fillable = [
		'label_mat',
		'credit_mat',
		'vh_mat',
		'num_salle'
	];
}
