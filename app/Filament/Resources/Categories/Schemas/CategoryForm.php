<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->helperText('Gunakan nama kategori yang mudah diingat dan relevan dengan resep yang akan dikategorikan.')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('icon')
                    ->image()
                    ->label('Ikon Kategori')
                    ->required()
                    ->helperText('Unggah ikon yang mewakili kategori ini. Pastikan ikon tersebut jelas dan mudah dikenali.')
                    ->maxSize(2048) // Maksimal ukuran file dalam KB
            ]);
    }
}
