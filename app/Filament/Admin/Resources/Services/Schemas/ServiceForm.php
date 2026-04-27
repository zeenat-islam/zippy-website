<?php

namespace App\Filament\Admin\Resources\Services\Schemas;

use Filament\Schemas\Schema; 
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([ 
                // 1. Service Main Details
                Section::make('Service Main Details')
                    ->schema([
                        // Migration mein 'title' hai, is liye 'name' ki jagah 'title' use karein
                        TextInput::make('title') 
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),
                        
                        TextInput::make('slug')
                            ->required()
                            ->unique('services', 'slug', ignoreRecord: true),

                        // Short Description (Textarea)
                        Textarea::make('short_desc')
                            ->required()
                            ->columnSpanFull(),

                        // Main Image
                        FileUpload::make('image')
                           ->disk('public') // Ye config/filesystems.php wali disk hai jo 'Assests/images' ko point karti hai
                            ->directory('services') 
                            ->image()
                            ->imageEditor()
                            ->columnSpanFull(),

                        // Tags (JSON Column)
                      Repeater::make('tags')
                    ->schema([
                        TextInput::make('tag_name')->label('Tag')->required(),
                    ])
                    ->grid(3)
                    ->addable(false)
                    ->deletable(false)
                    ->reorderable(false)
                    ->default([
                        ['tag_name' => ''], ['tag_name' => ''], ['tag_name' => ''],
                    ])
                    ->columnSpanFull(),
                    ])->columns(2),

                // 2. Page Content Blocks (Ye aapka dynamic content hai)
                Section::make('Service Detail Page Content')
                    ->description('Ye data service_details table mein save hoga')
                    ->relationship('detail') // <--- YEH LINE SABSE IMPORTANT HAI
                    ->schema([
                        // Detail page ka extra title (optional)
                        TextInput::make('hero_title')
                            ->label('Hero Title')
                            ->placeholder('Detail page ka main title yahan likhein')
                            ->columnSpanFull(),

                        Builder::make('content_blocks') 
                            ->label('Page Sections')
                            ->blocks([
                                // BLOCK: Section Split (About us style)
                                Builder\Block::make('section_split')
                                    ->label('Split Section (Text & Image)')
                                    ->icon('heroicon-o-view-columns')
                                    ->schema([
                                        TextInput::make('title')->required(),
                                        RichEditor::make('description'),
                                        FileUpload::make('image')
                                            ->disk('public')
                                             ->image()
                                            ->imageEditor()
                                            ->directory('services'),
                                        Repeater::make('list_items')
                                            ->simple(TextInput::make('item'))
                                            ->label('Features/Points'),
                                    ]),

                                // BLOCK: Section Grid (Service Cards style)
                                Builder\Block::make('section_grid')
                                    ->label('Grid Section (Features Grid)')
                                    ->icon('heroicon-o-squares-2x2')
                                    ->schema([
                                        TextInput::make('title')->required(),
                                        FileUpload::make('center_image')
                                           ->disk('public')
                                             ->image()
                                            ->imageEditor()
                                            ->directory('services'),
                                        Repeater::make('grid_items')
                                            ->schema([
                                                TextInput::make('title')->required(),
                                                TextInput::make('desc')->required(),
                                            ])->columns(2)->maxItems(4),
                                    ]),
                            ])
                            ->columnSpanFull()
                            ->collapsible(),
                    ]),
            ]);
    }
}