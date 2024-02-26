<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Departement
 * 
 * @property string $code_depart
 * @property string $site
 * @property string $label_depart
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Departement extends Model
{
	protected $table = 'departement';
	protected $primaryKey = 'code_depart';
	public $incrementing = false;

	protected $fillable = [
		'site',
		'label_depart'
	];
}
