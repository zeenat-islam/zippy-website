<?php

namespace App\Filament\Admin\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('designation')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Team Member Photo')
                            ->label('Team Member Photo')
                            ->image()
                            ->disk('public') // Ya 'team_images' agar separate folder chahiye
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '1:1', // Square
                            ])
                            ->required()
                            ->columnSpanFull(),
                TextInput::make('linkedin_url')
                    ->url(),
                TextInput::make('twitter_url')
                    ->url(),
                TextInput::make('instagram_url')
                    ->url(),
            ]);
    }
}
