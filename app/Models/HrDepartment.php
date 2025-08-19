<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HrDepartment
 * 
 * @property int $department_id
 * @property string $department_name
 * @property int|null $location_id
 * 
 * @property HrLocation|null $hr_location
 * @property Collection|HrEmployee[] $hr_employees
 *
 * @package App\Models
 */
class HrDepartment extends Model
{
	protected $table = 'hr_departments';
	protected $primaryKey = 'department_id';
	public $timestamps = false;

	protected $casts = [
		'location_id' => 'int'
	];

	protected $fillable = [
		'department_name',
		'location_id'
	];

	public function hr_location()
	{
		return $this->belongsTo(HrLocation::class, 'location_id');
	}

	public function hr_employees()
	{
		return $this->hasMany(HrEmployee::class, 'department_id');
	}
}
