<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdolescentesResource\Pages;
use App\Filament\Resources\AdolescentesResource\RelationManagers;
use App\Models\Adolescentes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdolescentesResource extends Resource
{
    protected static ?string $model = Adolescentes::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Participantes | Inscripciones';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informacion Personal')
                    ->description ('Ingresar los datos de la participante del programa.')
                    ->schema([
                        Forms\Components\TextInput::make('primer_nombre')
                            ->label('Primer Nombre')
                            ->required(),
                        Forms\Components\TextInput::make('segundo_nombre')
                            ->label('Segundo Nombre'),                        
                        Forms\Components\TextInput::make('primer_apellido')
                            ->label('Primer Apellido')
                            ->required(),
                        Forms\Components\TextInput::make('segundo_apellido')
                            ->label('Segundo Apellido'),
                        Forms\Components\DatePicker::make('fecha_nacimiento')                 
                            ->label('Fecha de Nacimiento')
                            ->after('1900-01-01')
                            ->before(now())
                            ->required(),       
                        /*Forms\Components\TextInput::make('edad')             
                            ->label('Edad')
                            ->required(),   */
                        Forms\Components\Select::make('grado_escolar')       
                            ->label('Grado Escolar')
                            ->required()
                            ->options([
                                '1ero primaria' => '1ero primaria',
                                '2do primaria' => '2do primaria',
                                '3ero primaria' => '3ero primaria',
                                '4to primaria' => '4to primaria',
                                '5to primaria' => '5to primaria',
                                '6to primaria' => '6to primaria',
                                '1ero basico' =>    '1ero basico',
                                '2do basico' =>    '2do basico',
                                '3ero basico' =>    '3ero basico',
                                'No estudia' => 'No estudia',
                                'Otro' => 'Otro',
                            ]),
                        Forms\Components\TextInput::make('telefono')
                            ->label('Telefono')
                            ->type('tel')
                            ->required(),
                    ])->columns(3),

                Forms\Components\Section::make('Informacion del Encargado')
                    ->description ('Ingresar la informacion del encargado o Tutor de la participante.')
                    ->schema([
                        Forms\Components\TextInput::make('nombre_encargado')
                            ->label('Nombre del Encargado')
                            ->required(),
                        Forms\Components\TextInput::make('telefono_encargado')
                            ->label('Telefono del Encargado')
                            ->type('tel')
                            ->required(),
                ])->columns(2),
                
                Forms\Components\Section::make('Grupo y Espacio Seguro')
                    ->description ('Ingrese datos sobre la mentora encargada, el grupo al que participa y espacio seguro correspondiente.')
                    ->schema([
                        Forms\Components\BelongsToSelect::make('mentoras_id')    
                            ->label('Mentora')
                            ->relationship('mentoras', 'nombre'),

                        /*Forms\Components\Select::make('rango')           
                            ->label('Rango')
                            ->options([
                                'niñas' => 'niñas',
                                'adolencentes' => 'adolencentes',
                            ])
                            ->required(),*/
                        Forms\Components\BelongsToSelect::make('espacio_seguros_id')
                            ->label('Espacio Seguro')
                            ->preload()
                            ->relationship('espacioseguro', 'nombre')
                            ->preload()
                            ->required(),
                        Forms\Components\DatePicker::make('fecha_inscripcion')  
                            ->label('Fecha de Inscripcion')
                            ->required(),
                    ])->columns(2),
                    Forms\Components\Section::make()
                    ->schema([
                    Forms\Components\DateTimePicker::make('created_at')
                            ->label('Fecha de Creacion')
                            ->disabled(),
                    Forms\Components\DateTimePicker::make('updated_at')
                            ->label('Ultima Actualizacion')
                            ->disabled(),
                    ])->collapsible()
                      ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('primer_nombre')
                    ->label('Primer Nombre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('segundo_nombre')
                    ->label('Segundo Nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('primer_apellido')
                    ->label('Primer Apellido')
                    ->searchable(),
                Tables\Columns\TextColumn::make('segundo_apellido')
                    ->label('Segundo Apellido'),
                Tables\Columns\TextColumn::make('fecha_nacimiento')
                    ->label('Fecha de Nacimiento')
                    ->date(),
                Tables\Columns\TextColumn::make('edad')
                    ->label('Edad'),
                Tables\Columns\TextColumn::make('grado_escolar')
                    ->label('Grado Escolar'),
                Tables\Columns\TextColumn::make('telefono')
                    ->label('Telefono'),
                Tables\Columns\TextColumn::make('nombre_encargado')
                    ->label('Nombre del Encargado'),
                Tables\Columns\TextColumn::make('telefono_encargado')
                    ->label('Telefono del Encargado'),
                Tables\Columns\TextColumn::make('fecha_inscripcion')
                    ->label('Fecha de Inscripcion'),
                /*Tables\Columns\TextColumn::make('rango')
                    ->label('Rango'),*/
                Tables\Columns\TextColumn::make('mentoras.nombre')
                    ->label('Mentora'),
                Tables\Columns\TextColumn::make('espacioseguro.nombre')
                    ->label('Espacio Seguro')
                    ->searchable()
                    #->searchDebounceTimeout(500)
                    ->icon('heroicon-o-building-storefront'),
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
            'index' => Pages\ListAdolescentes::route('/'),
            'create' => Pages\CreateAdolescentes::route('/create'),
            'view' => Pages\ViewAdolescentes::route('/{record}'),
            'edit' => Pages\EditAdolescentes::route('/{record}/edit'),
        ];
    }    
}
