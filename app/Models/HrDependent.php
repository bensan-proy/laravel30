<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HrDependent
 * 
 * @property int $dependent_id
 * @property string $first_name
 * @property string $last_name
 * @property string $relationship
 * @property int $employee_id
 * 
 * @property HrEmployee $hr_employee
 *
 * @package App\Models
 */
class HrDependent extends Model
{
	protected $table = 'hr_dependents';
	protected $primaryKey = 'dependent_id';
	public $timestamps = false;

	protected $casts = [
		'employee_id' => 'int'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'relationship',
		'employee_id'
	];

	public function hr_employee()
	{
		return $this->belongsTo(HrEmployee::class, 'employee_id');
	}
}
