<?php

namespace App\Http\Controllers;

use App\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(Dish::with(['dish_categories'])->get(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $newDish = Dish::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'allergens' => $request->allergens,
            'nutritional_facts' => $request->nutritional_facts,
            'is_halal' => (bool) $request->is_halal,
            'is_vegan' => (bool) $request->is_vegan,
            'is_glutenfree' => (bool) $request->is_glutenfree,
            'price' => floatval($request->price),
            'is_available' => 1
        ]);

        return response()->json([
            'status' => (bool) $newDish,
            'data' => $newDish,
            'message' => $newDish ? 'Dish Created Successfully!' : 'Failed to Create a Dish.'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        //
    }
}
