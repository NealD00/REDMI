<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AsistenciaNiniasResource\Pages;
use App\Filament\Resources\AsistenciaNiniasResource\RelationManagers;
use App\Models\AsistenciaNinias;
use App\Models\nintermedios;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Componnents\Tooggle;

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
                ->description('Ingresar los datos de la asistencia de las niñas.')
                ->schema([
                Forms\Components\TextInput::make('actividad')
                    ->required()
                    ->live(onBlur: true)
                    ->maxLength(40),
                Forms\Components\DatePicker::make('fecha')
                    ->required(),
                Forms\Components\Select::make('espacio_seguros_id')
                    ->label('Espacio Seguro')
                    ->preload()
                    ->reactive()
                    //->relationship('espacioseguro', 'nombre')
                    ->options(\App\Models\EspacioSeguro::pluck('nombre', 'id'))
                    ->required(),
                
                ])->columns(2),

            Forms\Components\Repeater::make('nintermedios')
                    ->label('Lista de Niñas')
                    ->Relationship('nintermedios')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('ninias_id')
                        ->label('Nombre Completo')
                        ->columnSpan(1)
                        ->required()// Hace el campo reactivo a cambios
                        //->dependsOn(['espacio_seguros_id']) // Depende de espacio_seguros_id
                        ->options(function (callable $get) {
                            // Obtener el valor de espacio_seguros_id
                            $espacioSeguroId = $get('../espacio_seguros_id'); // Subir un nivel para obtener el valor correcto

                            if ($espacioSeguroId) {
                                // Filtrar las niñas según el espacio seguro seleccionado
                                return \App\Models\Ninias::where('espacio_seguros_id', $espacioSeguroId)
                                    ->pluck('nombre_completo', 'id');
                            }

                            // Si no hay espacio seguro seleccionado, devolver todas las niñas
                            return \App\Models\Ninias::pluck('nombre_completo', 'id');
                        })
                        ->reactive() // Asegura que este campo se actualice cuando cambie espacio_seguros_id  
                        ->relationship('ninias', 'nombre_completo'),
                        Forms\Components\Toggle::make('asistio')
                            ->label('Asistió')
                            ->inline(false)
                            ->required(),
                    ])
                    ->createItemButtonLabel('Agregar Niña')
                    ->minItems(1)
                    ->required()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('actividad')
                    ->label('Actividad'),
                Tables\Columns\TextColumn::make('fecha'),
                Tables\Columns\TextColumn::make('espacioseguro.nombre')
                    ->label('Espacio Seguro')
                    ->alignleft(),
                /*Tables\Columns\TextColumn::make('ninias.nombre_completo')
                    ->label('Niña')
                    ->alignleft(),*/
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
