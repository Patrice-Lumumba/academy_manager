<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Etudiant
 *
 * @property string $code_etud
 * @property string $nom_etud
 * @property string|null $prenom_etud
 * @property string $tel_etud
 * @property string|null $mail_etud
 * @property int $annee_etud
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Etudiant extends Model
{
	protected $table = 'etudiant';
	protected $primaryKey = 'code_etud';
	public $incrementing = false;

	protected $casts = [
		'annee_etud' => 'int'
	];

	protected $fillable = [
		'code_etud',
		'nom_etud',
		'prenom_etud',
		'tel_etud',
		'mail_etud',
		'anne_etud'
	];
	public function evaluations(){
		return $this->hasMany(Evaluation::class, 'code_etud');
	}
}
