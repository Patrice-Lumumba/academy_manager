<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class College
 * 
 * @property string $site
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class College extends Model
{
	protected $table = 'college';
	protected $primaryKey = 'site';
	public $incrementing = false;
}
