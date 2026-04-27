<?php

namespace App\Filament\Admin\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('title')
                ->label('Project Title')
                ->required()
                ->placeholder('e.g. MediCare App'),

            TextInput::make('category_1')
                ->label('Category 1')
                ->required()
                ->placeholder('e.g. Healthcare'),

            TextInput::make('category_2')
                ->label('Category 2')
                ->required()
                ->placeholder('e.g. Mobile App'),

            FileUpload::make('image')
                ->label('Project Image')
                ->disk('public')
                ->directory('')
                ->image()
                ->required(),

            Textarea::make('description')
                ->label('Project Description')
                ->required()
                ->rows(3)
                ->placeholder('e.g. AI-powered patient management system'),

            TextInput::make('rating')
                ->label('Rating (0.0 - 5.0)')
                ->numeric()
                ->minValue(0)
                ->maxValue(5)
                ->step(0.1)
                ->required()
                ->placeholder('e.g. 4.9'),

            TextInput::make('project_url')
                ->label('Project URL')
                ->url()
                ->nullable()
                ->placeholder('e.g. https://project.com'),

        ]);
    }
}