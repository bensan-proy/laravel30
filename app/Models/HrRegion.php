<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HrRegion
 * 
 * @property int $region_id
 * @property string|null $region_name
 * 
 * @property Collection|HrCountry[] $hr_countries
 *
 * @package App\Models
 */
class HrRegion extends Model
{
	protected $table = 'hr_regions';
	protected $primaryKey = 'region_id';
	public $timestamps = false;

	protected $fillable = [
		'region_name'
	];

	public function hr_countries()
	{
		return $this->hasMany(HrCountry::class, 'region_id');
	}
}
