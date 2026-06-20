<?php

namespace App\Filament\Resources\Recipes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;

class RecipeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')
                    ->helperText('Gunakan nama resep yang mudah diingat dan relevan dengan resep yang akan dikategorikan.')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('thumbnail')
                    ->image()
                    ->maxSize(2048) // Maksimal ukuran file dalam KB
                    ->required(),

                Textarea::make('about')
                    ->helperText('Berikan deskripsi singkat tentang resep ini. Deskripsi ini akan membantu pengguna memahami konten resep sebelum mereka membukanya.')
                    ->required()
                    ->rows(10)
                    ->cols(20)
                    ->maxLength(1000),

                Repeater::make('recipeIngredients')
                    ->relationship()
                    ->schema([
                        Select::make('ingredient_id')
                            ->relationship('ingredient', 'name')
                            ->required(),
                    ]),

                Repeater::make('photos')
                    ->relationship('photos')
                    ->schema([
                        FileUpload::make('photo')
                            ->image()
                            ->maxSize(2048) // Maksimal ukuran file dalam KB
                            ->required(),
                    ]),

                Select::make('recipe_author_id')
                    ->relationship('author', 'name')
                    ->preload()
                    ->required(),

                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->preload()
                    ->required(),

                TextInput::make('url_video')
                    ->helperText('Masukkan URL video yang relevan dengan resep ini. Pastikan URL tersebut valid dan dapat diakses oleh pengguna.')
                    ->maxLength(255),


                TextInput::make('url_file')
                    ->helperText('Masukkan URL file yang relevan dengan resep ini. Pastikan URL tersebut valid dan dapat diakses oleh pengguna.')
                    ->maxLength(255),

            ]);
    }
}
