<?php

namespace App\Filament\Resources\ApiKeys\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ApiKeyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->required()
                ->maxLength(225),

                TextInput::make('key')
                ->required()
                ->maxLength(225),
            ]);
    }
}
