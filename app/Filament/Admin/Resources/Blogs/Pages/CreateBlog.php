<?php

namespace App\Filament\Admin\Resources\Blogs\Pages;

use App\Filament\Admin\Resources\Blogs\BlogResource;
use App\Models\BlogDetail;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    protected function afterCreate(): void
    {
        $blocks = $this->record->content_blocks;

        BlogDetail::updateOrCreate(
            ['blog_id' => $this->record->id],
            ['content_blocks' => $blocks]
        );

        // blogs table se remove karo
        $this->record->update(['content_blocks' => null]);
    }
}