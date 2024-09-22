<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EspacioSeguroResource\Pages;
use App\Filament\Resources\EspacioSeguroResource\RelationManagers;
use App\Models\EspacioSeguro;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components;

class EspacioSeguroResource extends Resource
{
    protected static ?string $model = EspacioSeguro::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static ?string $navigationGroup = 'Momostenango';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make()
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->label('Comunidad')
                    ->maxLength(40)
                    ->required(),
                Forms\Components\Select::make('tipo')
                    ->options([
                        'escuela' => 'Escuela',
                        'iglesia' => 'Iglesia',
                        'salon' => 'Salon Comunitario',
                        'alcaldia' => 'Alcaldia Comunitaria',
                        'otro' => 'Otro',
                    ])
                    ->label('Tipo de Lugar')
                    ->default('escuela')
                    ->required(),
                
                Forms\Components\MarkdownEditor::make('descripcion')
                    ->label('Descripcion')
                    ->maxLength(200)
                    ->columnSpan(2)
                    ->required(),
                    /*->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file) {
                        return (string) str($file->getClientOriginalName())->prepend('espacios-seguros/');
                    })*/
                
                
                    ])->columns(2),

           Forms\Components\Section::make()
                ->schema([
                    Forms\Components\FileUpload::make('fotografia')
                    ->label('Fotografia')
                    ->directory('espacios-seguros')
                    ->image(),
                ])->collapsible(),

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
        ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('fotografia')
                    ->label('Fotografia')
                    ->disk('public')
                    #->directory('espacios-seguros')
                    #->path('espacios-seguros')
                    ->height('50px')
                    ->width('50px')
                    ->url(fn ($record) => asset("storage/{$record->fotografia}")),
                Tables\Columns\TextColumn::make('nombre')
                    ->label('Comunidad'),
                    /*->primary()
                    ->searchable()
                    ->sortable(),*/
                Tables\Columns\TextColumn::make('tipo')
                    ->label('Tipo'),
                    /*->searchable()
                    ->sortable(),*/
                Tables\Columns\TextColumn::make('descripcion')
                    ->label('Descripcion'),
                    /*->searchable()
                    ->sortable(),*/
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                //Tables\Actions\DeleteAction::make(),
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

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Components\Section::make()->schema([
                    Components\Split::make([
                        Components\Grid::make(2)
                        ->schema([
                            Components\Group::make([
                                Components\TextEntry::make('nombre'),
                                Components\TextEntry::make('descripcion'),
                            ]),
                            Components\Group::make([
                                Components\TextEntry::make('tipo')
                                ->badge()
                                ->color('success'),
                            ])
                        ]),
                        Components\ImageEntry::make('fotografia')
                            ->hiddenLabel()
                            ->grow(false),
                        
                    ])->from('lg'),
                ]),
                Components\Section::make('created_at')
                    ->label('Fechas')
                    ->columns(2)
                    ->schema([
                        Components\TextEntry::make('created_at')
                            ->label('Fecha de Creacion'),
                        Components\TextEntry::make('updated_at')
                            ->label('Ultima Actualizacion'),
                    ])
                    ->collapsible(),
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
            'index' => Pages\ListEspacioSeguros::route('/'),
            'create' => Pages\CreateEspacioSeguro::route('/create'),
            'view' => Pages\ViewEspacioSeguro::route('/{record}'),
            'edit' => Pages\EditEspacioSeguro::route('/{record}/edit'),
        ];
    }    
}
