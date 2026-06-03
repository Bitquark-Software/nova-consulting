<?php

namespace App\Filament\Resources\BlogPosts\Pages;

use App\Filament\Resources\BlogPosts\BlogPostResource;
use App\Models\BlogPost;
use Filament\Resources\Pages\EditRecord;

class EditBlogPost extends EditRecord
{
    protected static string $resource = BlogPostResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['_seo_meta_title_auto'] = $data['title'] ?? '';
        $data['_seo_meta_description_auto'] = BlogPost::metaDescriptionFromContent($data['content'] ?? '');
        $data['canonical_url'] = BlogPost::canonicalUrlForSlug($data['slug'] ?? null);

        return $data;
    }
}
