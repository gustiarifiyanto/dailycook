<?php

namespace App\Filament\Resources\RecipeAuthors\Pages;

use App\Filament\Resources\RecipeAuthors\RecipeAuthorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRecipeAuthors extends ListRecords
{
    protected static string $resource = RecipeAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
