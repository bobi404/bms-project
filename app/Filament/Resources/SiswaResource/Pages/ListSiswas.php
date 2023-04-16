<?php

namespace App\Filament\Resources\SiswaResource\Pages;

use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use App\Filament\Resources\SiswaResource;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\ListRecords;

class ListSiswas extends ListRecords
{
    protected static string $resource = SiswaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('import')
            ->action('save_import_data')
            ->form([
                FileUpload::make('file')
            ])
        ];
    }

    public function save_import_data()
    {
        
    }
}
