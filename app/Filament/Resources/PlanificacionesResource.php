<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanificacionesResource\Pages;
use App\Filament\Resources\PlanificacionesResource\RelationManagers;
use App\Models\Planificaciones;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components;
#use Filament\Forms\Components\SpatieTagsInput;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Pages\Page;

class PlanificacionesResource extends Resource
{
    protected static ?string $model = Planificaciones::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Planificacion Anual';

    protected static ?int $navigationSort = 4;

    #protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                ->schema([
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->live(onBlur: true)
                    ->maxLength(255),
                Forms\Components\Select::make('etiqueta')
                    ->label('Actividad')
                    ->options([
                        'tema' => 'Tema',
                        'manualidad' => 'Manualidad',
                        'otro' => 'Otro',
                    ])
                    ->required(),
                /*Forms\Components\FileUpload::make('imagen')
                    ->label('Imagen')
                    ->directory('planificaciones')
                    ->image(),*/
                Forms\Components\Select::make('estado')
                    ->options([
                        'pendiente' => 'Pendiente',
                        'aprovado' => 'Aprovado',
                        'cancelado' => 'Cancelado',
                    ])
                    ->required(),
    
                Forms\Components\DatePicker::make('fecha')
                    ->required(),
                /*Forms\Components\TextInput::make('imagen')
                    ->required()
                    ->maxLength(255),*/
                
                Forms\Components\BelongsToSelect::make('mentoras_id')    
                    ->label('Mentora')
                    ->relationship('mentoras', 'nombre'),
                #SpatieTagsInput::make('tags'),
            ])->columns(3),

            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\FileUpload::make('imagen')
                    ->label('Imagen')
                    ->directory('planificaciones')
                    ->image(),
                ])->collapsible(),
             
            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\MarkdownEditor::make('descripcion')
                        ->required()
                        ->columnSpan(2),
                ])->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            
                
                Tables\Columns\TextColumn::make('titulo')
                    ->label('Titulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('etiqueta')
                    ->label('Actividad')
                    ->badge()
                    ->colors([
                        'succes' => 'taller',
                        'succes' => 'tema',
                        'warning' => 'manualidad',
                        'warining' => 'otro',
                    ])
                    ->searchable(),
                /*Tables\Columns\TextColumn::make('descripcion')
                    ->label('Descripcion')
                    ->searchable(),*/
                Tables\Columns\TextColumn::make('fecha')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('estado')
                    ->label('Estado')
                    ->badge()
                    ->colors([
                        'success'=> 'aprovado',
                        'warning' => 'pendiente',
                        'danger'=> 'cancelado',
                    ])
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('mentoras.nombre')
                    ->label('Mentora'),
                Tables\Columns\ImageColumn::make('imagen')
                    ->label('Imagen')
                    ->disk('public')
                    #->directory('espacios-seguros')
                    #->path('espacios-seguros')
                    ->height('50px')
                    ->width('50px')
                    ->url(fn ($record) => asset("storage/{$record->imagen}")),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Components\Section::make()->schema([
                    Components\Split::make([
                        Components\Grid::make(2)
                        ->schema([
                            Components\Group::make([
                                Components\TextEntry::make('titulo'),
                                Components\TextEntry::make('etiqueta')
                                    ->hiddenLabel(),
                                Components\TextEntry::make('fecha')
                                    ->hiddenLabel(),
                            ]),
                            Components\Group::make([
                                Components\TextEntry::make('estado')
                                    ->badge()
                                    ->color('success'),
                                Components\TextEntry::make('mentoras.nombre')
                                    ->label('Mentora'),
                            ])
                        ]),
                        Components\ImageEntry::make('imagen')
                            ->hiddenLabel()
                            ->grow(false),
                        
                    ])->from('lg'),
                ]),
                Components\Section::make('descripcion')
                    ->schema([
                        Components\TextEntry::make('descripcion')
                            ->hiddenLabel(),
                    ])
                    ->collapsible(),
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
    
    /*public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationsitems([
            Pages\ViewPlanificaciones::class,
            Pages\EditPlanificaciones::class,
        ]);
    }*/

    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            Pages\ViewPlanificaciones::class,
            Pages\EditPlanificaciones::class,
            Pages\ManagePlanificacionesComments::class,
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlanificaciones::route('/'),
            'create' => Pages\CreatePlanificaciones::route('/create'),
            'view' => Pages\ViewPlanificaciones::route('/{record}'),
            'edit' => Pages\EditPlanificaciones::route('/{record}/edit'),
        ];
    }    
}
