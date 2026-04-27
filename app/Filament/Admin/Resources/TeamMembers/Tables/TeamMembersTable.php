<?php

namespace App\Filament\Admin\Resources\TeamMembers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TeamMembersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Photo')
                    ->disk('public')
                    ->width(60)
                    ->height(60)
                    ->circular(),

                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('designation')
                    ->label('Position')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->label('Bio')
                    ->limit(50)
                    ->wrap(),

                TextColumn::make('linkedin_url')
                    ->label('LinkedIn')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->icon('heroicon-o-link')
                    ->url(fn($record) => $record->linkedin_url)
                    ->openUrlInNewTab(),

                TextColumn::make('created_at')
                    ->label('Added On')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}