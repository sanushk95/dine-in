<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\DishCategory;

class Dish extends Model
{
    //
    protected $fillable = [
        'category_id', 'name', 'image', 'description', 'ingredients', 'allergens', 'nutritional_facts', 'is_halal', 'is_vegan', 'is_glutenfree', 'price', 'is_available'
    ];

    public function dish_categories() {
        return $this->hasOne(DishCategory::class, 'id', 'category_id');
    }
}
