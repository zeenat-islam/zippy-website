<?php

namespace App\Filament\Admin\Resources\Contacts;

use App\Filament\Admin\Resources\Contacts\Pages\ListContacts;
use App\Filament\Admin\Resources\Contacts\Pages\ViewContact; // ← yeh add karo
use App\Filament\Admin\Resources\Contacts\Tables\ContactsTable;
use App\Models\ContactMessage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = ContactMessage::class;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedEnvelope;
    protected static ?string $recordTitleAttribute = 'name';
    protected static ?string $navigationLabel = 'Contact Messages';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([]);
    }

    public static function table(Table $table): Table
    {
        return ContactsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContacts::route('/'),
            'view'  => ViewContact::route('/{record}'),
        ];
    }
}