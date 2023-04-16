<?php

namespace App\Filament\Resources\AkademikResource\Pages;

use App\Filament\Resources\AkademikResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAkademiks extends ListRecords
{
    protected static string $resource = AkademikResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
