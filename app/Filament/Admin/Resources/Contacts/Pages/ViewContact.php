<?php

namespace App\Filament\Admin\Resources\Contacts\Pages;

use App\Filament\Admin\Resources\Contacts\ContactResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ViewRecord;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    public function infolist(Schema $schema): Schema
    {
        return $schema->components([

            Section::make('Contact Details')->schema([

                TextEntry::make('name')->label('Full Name'),
                TextEntry::make('email')->label('Email'),
                TextEntry::make('phone')->label('Phone'),
                TextEntry::make('service')->label('Service'),
                TextEntry::make('job_inquiry')->label('Job Inquiry'),
                TextEntry::make('message')->label('Message')->columnSpanFull(),
                TextEntry::make('created_at')->label('Received At')->dateTime(),

            ])->columns(2),

        ]);
    }
}