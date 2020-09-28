<?php

namespace App\Http\Controllers;

use App\DishCategory;
use Illuminate\Http\Request;

class DishCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all_cat = DishCategory::all();
        return response()->json($all_cat, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\DishCategory  $dishCategory
     * @return \Illuminate\Http\Response
     */
    public function show(DishCategory $dishCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DishCategory  $dishCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(DishCategory $dishCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DishCategory  $dishCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DishCategory $dishCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DishCategory  $dishCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(DishCategory $dishCategory)
    {
        //
    }
}
