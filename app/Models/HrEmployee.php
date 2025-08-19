<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HrEmployee
 * 
 * @property int $employee_id
 * @property string|null $first_name
 * @property string $last_name
 * @property string $email
 * @property string|null $phone_number
 * @property Carbon $hire_date
 * @property int $job_id
 * @property float $salary
 * @property int|null $manager_id
 * @property int|null $department_id
 * 
 * @property HrJob $hr_job
 * @property HrDepartment|null $hr_department
 * @property HrEmployee|null $hr_employee
 * @property Collection|HrDependent[] $hr_dependents
 * @property Collection|HrEmployee[] $hr_employees
 *
 * @package App\Models
 */
class HrEmployee extends Model
{
	protected $table = 'hr_employees';
	protected $primaryKey = 'employee_id';
	public $timestamps = false;

	protected $casts = [
		'hire_date' => 'datetime',
		'job_id' => 'int',
		'salary' => 'float',
		'manager_id' => 'int',
		'department_id' => 'int'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'phone_number',
		'hire_date',
		'job_id',
		'salary',
		'manager_id',
		'department_id'
	];

	public function hr_job()
	{
		return $this->belongsTo(HrJob::class, 'job_id');
	}

	public function hr_department()
	{
		return $this->belongsTo(HrDepartment::class, 'department_id');
	}

	public function hr_employee()
	{
		return $this->belongsTo(HrEmployee::class, 'manager_id');
	}

	public function hr_dependents()
	{
		return $this->hasMany(HrDependent::class, 'employee_id');
	}

	public function hr_employees()
	{
		return $this->hasMany(HrEmployee::class, 'manager_id');
	}
}
