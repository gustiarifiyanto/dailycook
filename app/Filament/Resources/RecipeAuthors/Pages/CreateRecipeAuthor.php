<?php

namespace App\Filament\Resources\RecipeAuthors\Pages;

use App\Filament\Resources\RecipeAuthors\RecipeAuthorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRecipeAuthor extends CreateRecord
{
    protected static string $resource = RecipeAuthorResource::class;
}
