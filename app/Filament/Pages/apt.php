<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class apt extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.apt';

    protected static ?string $slug = 'apt-page';

    protected static ?string $title = 'Ангарский политехнический техникум';

    public function mount(): void
    {
        // Ваша логика для инициализации страницы
    }

}
