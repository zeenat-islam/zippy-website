<?php

namespace App\Filament\Admin\Resources\Blogs\Pages;

use App\Filament\Admin\Resources\Blogs\BlogResource;
use App\Models\BlogDetail;
use Filament\Resources\Pages\EditRecord;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    // Edit page khulne par BlogDetail se data load karo
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $detail = BlogDetail::where('blog_id', $data['id'])->first();

        if ($detail) {
            $data['content_blocks'] = $detail->content_blocks;
        }

        return $data;
    }

    // Save hone par BlogDetail mein save karo
    protected function afterSave(): void
    {
        $blocks = $this->record->content_blocks;

        BlogDetail::updateOrCreate(
            ['blog_id' => $this->record->id],
            ['content_blocks' => $blocks]
        );
    }
}