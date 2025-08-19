<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HrJob
 * 
 * @property int $job_id
 * @property string $job_title
 * @property float|null $min_salary
 * @property float|null $max_salary
 * 
 * @property Collection|HrEmployee[] $hr_employees
 *
 * @package App\Models
 */
class HrJob extends Model
{
	protected $table = 'hr_jobs';
	protected $primaryKey = 'job_id';
	public $timestamps = false;

	protected $casts = [
		'min_salary' => 'float',
		'max_salary' => 'float'
	];

	protected $fillable = [
		'job_title',
		'min_salary',
		'max_salary'
	];

	public function hr_employees()
	{
		return $this->hasMany(HrEmployee::class, 'job_id');
	}
}
