<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;
use App\Filament\Resources\UsersResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Infolist\Infolist;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;


class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static ?string $navigationGroup = 'Filament Shield';

    protected static ?string $modelLabel = 'Usuarios';
    
    protected static ?int $navigationSort = 5;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Usuario y Permisos')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Nombre')
                        ->required(),
                        //->placeholder('Nombre Completo')
                        //->disabled(),
                    Forms\Components\TextInput::make('email')
                        ->label('Correo Electrónico')
                        ->required()
                        ->email()
                        ->unique(ignoreRecord: true),
                    /*Forms\Components\TextInput::make('email_verified_at')
                        ->label('Correo Electrónico Verificado')
                        ->disabled(),*/
                    Forms\Components\TextInput::make('password')
                        ->label('Contraseña')
                        ->required()
                        ->password()
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                        //->visible(fn ($livewire) => $livewire instanceof CreateUsers)
                        //->visible(fn ($livewire) => true) // Hacerlo siempre visible para fines de diagnóstico
                        ->rule(Password::default()),            
                    Forms\Components\Select::make('roles')
                        ->relationship('roles', 'name')
                        ->reactive()
                        ->multiple()
                        ->preload()
                        ->searchable(),
                ]),

              /*Forms\Components\Section::make('Usuario Nueva contraseña')
                ->schema([
                    Forms\Components\TextInput::make('new_password')
                        ->label('Nueva Contraseña')
                        ->nullable()
                        ->password()
                        ->visible(fn ($livewire) => $livewire instanceof EditUsers)
                        ->rule(Password::defaults()),
                    Forms\Components\TextInput::make('new_password_confirmation')
                        ->label('Confirmar Nueva Contraseña')
                        ->password()
                        ->nullable()
                        ->same('new_password')
                        ->requiredWith('new_password'),
                ]),*/
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                //Tables\Columns\TextColumn::make('email_verified_at'),
                //Tables\Columns\TextColumn::make('password'),
                Tables\Columns\TextColumn::make('created_at')
                ->date(),
                Tables\Columns\TextColumn::make('updated_at')
                ->date(),
                /*Forms\Components\Select::make('roles')
                ->relationship('roles', 'name')
                ->multiple()
                ->preload()
                ->searchable()*/
                    /*->formatUsing(function ($value) {
                        return str_repeat('*', strlen($value));
                    })*/
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'view' => Pages\ViewUsers::route('/{record}'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }    
}
