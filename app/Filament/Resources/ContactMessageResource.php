<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Models\ContactMessage;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-envelope';

    protected static string | \UnitEnum | null $navigationGroup = 'Relations';

    protected static ?string $modelLabel = 'Message';

    protected static ?string $pluralModelLabel = 'Messages de contact';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Expéditeur')->schema([
                TextInput::make('name')->label('Nom')->required(),
                TextInput::make('email')->label('Email')->email()->required(),
                TextInput::make('phone')->label('Téléphone'),
            ])->columns(3),

            Section::make('Message')->schema([
                Select::make('type')
                    ->label('Type')
                    ->options([
                        'general' => 'Général',
                        'devis' => 'Demande de devis',
                        'cotation' => 'Demande de cotation',
                    ])
                    ->required(),
                TextInput::make('subject')->label('Sujet')->required(),
                Textarea::make('message')->label('Message')->required()->rows(6)->columnSpanFull(),
                Toggle::make('is_read')->label('Lu'),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('is_read')->label('')->boolean()->width(40),
                Tables\Columns\TextColumn::make('name')->label('Nom')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
                Tables\Columns\TextColumn::make('subject')->label('Sujet')->limit(40)->searchable(),
                Tables\Columns\TextColumn::make('type')->label('Type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'general' => 'gray',
                        'devis' => 'warning',
                        'cotation' => 'info',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('created_at')->label('Reçu le')->dateTime('d/m/Y H:i')->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('type')->label('Type')->options([
                    'general' => 'Général',
                    'devis' => 'Demande de devis',
                    'cotation' => 'Demande de cotation',
                ]),
                Tables\Filters\TernaryFilter::make('is_read')->label('Lu'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactMessages::route('/'),
            'create' => Pages\CreateContactMessage::route('/create'),
            'edit' => Pages\EditContactMessage::route('/{record}/edit'),
        ];
    }
}
