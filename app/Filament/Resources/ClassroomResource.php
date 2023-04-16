<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassroomResource\Pages;
use App\Filament\Resources\ClassroomResource\RelationManagers;
use App\Models\Akademik;
use App\Models\Classroom;
use App\Models\Guru;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClassroomResource extends Resource
{
    protected static ?string $model = Classroom::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Kelas';

    protected static ?string $label = 'Kelas';

    protected static ?string $pluralLabel = 'Kelas';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('akademik_id')
                    ->label(__('Akademik'))
                    ->required()
                    ->options(Akademik::all()->pluck('nama', 'id')),
                Forms\Components\TextInput::make('nama_kelas')
                    ->label(__('Nama'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('tingkat')
                    ->required()
                    ->options([
                        '0',
                        '1',
                        '2',
                        '3',
                        '4',
                        '5',
                        '6',
                        '7',
                        '8',
                        '9',
                        '10',
                        '11',
                        '12',
                    ]),
                Forms\Components\TextInput::make('label')
                    ->required()
                    ->maxLength(2),
                Forms\Components\Select::make('guru_id')
                    ->label(__('Guru Wali'))
                    ->searchable()
                    ->options(Guru::all()->pluck('nama', 'id')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_kelas'),
                Tables\Columns\TextColumn::make('tingkat'),
                Tables\Columns\TextColumn::make('label'),
                Tables\Columns\TextColumn::make('guru.nama')->label(__('Guru Wali')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClassrooms::route('/'),
            'create' => Pages\CreateClassroom::route('/create'),
            'edit' => Pages\EditClassroom::route('/{record}/edit'),
        ];
    }    
}
