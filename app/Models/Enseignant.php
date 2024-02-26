<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Enseignant
 * 
 * @property string $code_ens
 * @property string $code_depart
 * @property string $code_mat
 * @property string $code_depart_contenir
 * @property string $nom_ens
 * @property string|null $prenom_ens
 * @property string $tel_ens
 * @property string|null $mail_ens
 * @property Carbon $date_prise_ens
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Enseignant extends Model
{
	protected $table = 'enseignant';
	protected $primaryKey = 'code_ens';
	public $incrementing = false;

	protected $casts = [
		'date_prise_ens' => 'datetime'
	];

	protected $fillable = [
		'code_depart',
		'code_mat',
		'code_depart_contenir',
		'nom_ens',
		'prenom_ens',
		'tel_ens',
		'mail_ens',
		'date_prise_ens'
	];
}
