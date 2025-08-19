<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HrCountry
 * 
 * @property string $country_id
 * @property string|null $country_name
 * @property int $region_id
 * 
 * @property HrRegion $hr_region
 * @property Collection|HrLocation[] $hr_locations
 *
 * @package App\Models
 */
class HrCountry extends Model
{
	protected $table = 'hr_countries';
	protected $primaryKey = 'country_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'region_id' => 'int'
	];

	protected $fillable = [
		'country_name',
		'region_id'
	];

	public function hr_region()
	{
		return $this->belongsTo(HrRegion::class, 'region_id');
	}

	public function hr_locations()
	{
		return $this->hasMany(HrLocation::class, 'country_id');
	}
}
