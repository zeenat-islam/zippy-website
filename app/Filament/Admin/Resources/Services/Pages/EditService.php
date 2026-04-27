<?php

namespace App\Filament\Admin\Resources\Services\Pages;

use App\Filament\Admin\Resources\Services\ServiceResource;
use Filament\Actions\DeleteAction; // Sahi path
use Filament\Resources\Pages\EditRecord; // Sahi path

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    // Optional: Edit karne ke baad wapas list par jane ke liye
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}