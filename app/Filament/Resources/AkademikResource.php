<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AkademikResource\Pages;
use App\Filament\Resources\AkademikResource\RelationManagers;
use App\Models\Akademik;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class AkademikResource extends Resource
{
    protected static ?string $model = Akademik::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationLabel = 'Akademik';

    protected static ?string $pluralLabel = 'Akademik';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('semester')
                    ->columnSpan(2)
                    ->options([
                        '1' => 'Ganjil',
                        '0' => 'Genap',
                    ]),
                Forms\Components\TextInput::make('nama')->label(__('Tahun'))
                    ->columnSpan(2)
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->columnSpan(2)
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('status')->label(__('Aktif'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('deskripsi'),
                Tables\Columns\TextColumn::make('semester'),
                Tables\Columns\IconColumn::make('status')->label(__('Aktif'))
                    ->boolean(),
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
            'index' => Pages\ListAkademiks::route('/'),
            'create' => Pages\CreateAkademik::route('/create'),
            'edit' => Pages\EditAkademik::route('/{record}/edit'),
        ];
    }    
    
}
