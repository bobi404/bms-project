<?php

namespace App\Filament\Resources\ClassroomResource\Pages;

use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ClassroomResource;

class EditClassroom extends EditRecord
{
    protected static string $resource = ClassroomResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Action::make('tes')
                ->hasTable('table') 
                ([
                    Tables\Columns\TextColumn::make('nama_kelas'),
                    Tables\Columns\TextColumn::make('tingkat')
                ])
        ];
    }

}
