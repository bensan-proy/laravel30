<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HrLocation
 * 
 * @property int $location_id
 * @property string|null $street_address
 * @property string|null $postal_code
 * @property string $city
 * @property string|null $state_province
 * @property string $country_id
 * 
 * @property HrCountry $hr_country
 * @property Collection|HrDepartment[] $hr_departments
 *
 * @package App\Models
 */
class HrLocation extends Model
{
	protected $table = 'hr_locations';
	protected $primaryKey = 'location_id';
	public $timestamps = false;

	protected $fillable = [
		'street_address',
		'postal_code',
		'city',
		'state_province',
		'country_id'
	];

	public function hr_country()
	{
		return $this->belongsTo(HrCountry::class, 'country_id');
	}

	public function hr_departments()
	{
		return $this->hasMany(HrDepartment::class, 'location_id');
	}
}
