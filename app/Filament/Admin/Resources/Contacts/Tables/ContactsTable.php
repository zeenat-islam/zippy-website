<?php

namespace App\Filament\Admin\Resources\Contacts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('Phone'),

                TextColumn::make('service')
                    ->label('Service')
                    ->badge()
                    ->color('info'),

                TextColumn::make('job_inquiry')
                    ->label('Job Inquiry')
                    ->badge()
                    ->color(fn($state) => match($state) {
                        'yes'   => 'success',
                        'no'    => 'danger',
                        'maybe' => 'warning',
                        default => 'gray',
                    }),

                TextColumn::make('message')
                    ->label('Message')
                    ->limit(50)
                    ->tooltip(fn($record) => $record->message),

                TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime()
                    ->sortable(),

            ])
            ->defaultSort('created_at', 'desc')
            ->filters([])
            ->recordActions([
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}