<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MentorasResource\Pages;
use App\Filament\Resources\MentorasResource\RelationManagers;
use App\Models\Mentoras;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\MultiSelect;


class MentorasResource extends Resource
{
    protected static ?string $model = Mentoras::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static ?string $navigationGroup = 'Momostenango';

    #protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                    Forms\Components\TextInput::make('nombre')
                        ->label('Nombre Completo')
                        ->required(),
                    Forms\Components\DatePicker::make('fechaNacimiento')
                        ->label('Fecha de Nacimiento')
                        ->after('1900-01-01')
                        ->before(now())
                        ->required(),
                    Forms\Components\TextInput::make('correo')
                        ->label('Correo Electronico')
                        ->email()
                        ->required(),
                    Forms\Components\TextInput::make('telefono')
                        ->label('Telefono')
                        ->type('tel')
                        ->required(),
                ])->columns(2),
                
                Forms\Components\Section::make()
                    ->schema([
                Forms\Components\Select::make('grupo')
                    ->label('Grupos')
                    ->options([
                        'niñas' => 'niñas',
                        'adolencentes' => 'adolencentes',
                        'niñas y adolencentes' => 'niñas y adolencentes',
                    ]),
                Forms\Components\BelongsToSelect::make('espacio_seguros_id')
                    ->label('Espacio Seguro')
                    ->preload()
                    ->relationship('espacioseguro', 'nombre')
                    ->preload()
                    ->required(),
                Forms\Components\BelongsToSelect::make('espacio_seguros_id_2')
                    ->label('Espacio Seguro 2')
                    ->preload()
                    ->relationship('espacioseguro2', 'nombre')
                    ->preload()
                    /*->createOptionForm([
                        Forms\Components\TextInput::make('nombre')
                            ->required(),
                    ])*/
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
                Tables\Columns\TextColumn::make('nombre')
                    ->label('Nombre Completo')
                    ->searchable()
                    ->sortable(),
               
                Tables\Columns\TextColumn::make('grupo'),
                Tables\Columns\TextColumn::make('correo')
                    ->label('Correo'),
                Tables\Columns\TextColumn::make('espacioseguro.nombre')
                    ->label('Espacio Seguro'),
                    #->implode(', '),
                Tables\Columns\TextColumn::make('espacioseguro2.nombre')
                    ->label('Espacio Seguro2')
                    #->nullable()
                    ->default(''),
                Tables\Columns\TextColumn::make('fechaNacimiento')
                    ->label('Fecha de Nacimiento')
                    ->date(),
                Tables\Columns\TextColumn::make('edad'),
                Tables\Columns\TextColumn::make('telefono'),
            ])


            ->filters([
                //
            ])
            ->actions([
               /* Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),*/
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
            'index' => Pages\ListMentoras::route('/'),
            'create' => Pages\CreateMentoras::route('/create'),
            'view' => Pages\ViewMentoras::route('/{record}'),
            'edit' => Pages\EditMentoras::route('/{record}/edit'),
        ];
    }    
}
