<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Dish;

class DishCategory extends Model
{
    //
    protected $fillable = [
        'category_name'
    ];

    public function dishes() {
        return $this->belongsTo(Dish::class, 'category_id', 'id');
    }
}
