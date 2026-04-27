<?php

namespace App\Filament\Admin\Resources\Services\Pages;

use App\Filament\Admin\Resources\Services\ServiceResource;
use Filament\Resources\Pages\CreateRecord; // Sahi import path ye hai

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;

    // Optional: Agar aap chahti hain ke save karne ke baad wapas list page par jaye
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}