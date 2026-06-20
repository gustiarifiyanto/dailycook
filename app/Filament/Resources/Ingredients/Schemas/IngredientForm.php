<?php

namespace App\Filament\Resources\Ingredients\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class IngredientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')
                    ->helperText('Gunakan nama bahan yang mudah diingat dan relevan dengan resep yang akan dikategorikan.')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('photo')
                    ->image()
                    ->maxSize(2048) // Maksimal ukuran file dalam KB
                    ->required()
            ]);
    }
}
