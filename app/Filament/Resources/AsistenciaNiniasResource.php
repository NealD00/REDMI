<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AsistenciaNiniasResource\Pages;
use App\Filament\Resources\AsistenciaNiniasResource\RelationManagers;
use App\Models\AsistenciaNinias;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AsistenciaNiniasResource extends Resource
{
    protected static ?string $model = AsistenciaNinias::class;

    protected static ?string $navigationIcon = 'heroicon-o-table-cells';

    protected static ?string $modelLabel = 'Asistencia Niñas';

    protected static ?string $navigationGroup = 'Asistencias';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                ->schema([
                Forms\Components\TextInput::make('actividad')
                    ->required()
                    ->live(onBlur: true)
                    ->maxLength(255),
                Forms\Components\DatePicker::make('fecha')
                    ->required(),
                Forms\Components\BelongsToSelect::make('espacio_seguros_id')
                    ->relationship('espacioseguro', 'id', 'nombre')
                    ->required(),
                Forms\Components\BelongsToSelect::make('ninias_id')
                    ->relationship('ninia', 'id', 'nombre')
                    ->required(),
            ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListAsistenciaNinias::route('/'),
            'create' => Pages\CreateAsistenciaNinias::route('/create'),
            'view' => Pages\ViewAsistenciaNinias::route('/{record}'),
            'edit' => Pages\EditAsistenciaNinias::route('/{record}/edit'),
        ];
    }    
}
