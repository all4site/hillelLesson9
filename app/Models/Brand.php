<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 * @method static inRandomOrder()
 * @method paginate(int $int)
 * @property mixed products
 */
class Brand extends Model
{
    use HasFactory;

	public function products()
	{
		return $this->hasMany(Product::class);
    }
}
