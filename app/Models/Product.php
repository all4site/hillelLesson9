<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 * @method static paginate(int $int)
 */
class Product extends Model
{
    use HasFactory;
	protected $fillable = [
			'name', 'description', 'price'
	];
	public function brand()
	{
		return $this->hasOne(Brand::class);
    }
}
