<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Http\Resources\Api\RecipeResource;

class RecipeController extends Controller
{
    //
    public function index()
    {
        $recipes = Recipe::with(['photos', 'category', 'author', 'tutorials', 'recipeIngredients.ingredient'])->get();
        return RecipeResource::collection($recipes);
    }

    public function show(Recipe $recipes)
    {
        $recipes->load(['category', 'photos', 'author', 'tutorials', 'recipeIngredients.ingredient']);
        return new RecipeResource($recipes);
    }
}
