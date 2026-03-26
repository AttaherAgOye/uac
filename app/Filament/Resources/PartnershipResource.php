<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnershipResource\Pages;
use App\Models\Partnership;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class PartnershipResource extends Resource
{
    protected static ?string $model = Partnership::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-user-group';

    protected static string | \UnitEnum | null $navigationGroup = 'Relations';

    protected static ?string $modelLabel = 'Demande de partenariat';

    protected static ?string $pluralModelLabel = 'Demandes de partenariat';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Entreprise')->schema([
                TextInput::make('company_name')->label('Entreprise')->required(),
                TextInput::make('sector')->label('Secteur')->required(),
                TextInput::make('city')->label('Ville'),
            ])->columns(3),

            Section::make('Contact')->schema([
                TextInput::make('contact_name')->label('Nom du contact')->required(),
                TextInput::make('contact_email')->label('Email')->email()->required(),
                TextInput::make('contact_phone')->label('Téléphone'),
            ])->columns(3),

            Section::make('Détails')->schema([
                Textarea::make('message')->label('Message')->rows(4)->columnSpanFull(),
                Select::make('status')
                    ->label('Statut')
                    ->options([
                        'pending' => 'En attente',
                        'contacted' => 'Contacté',
                        'in_progress' => 'En cours',
                        'accepted' => 'Accepté',
                        'rejected' => 'Rejeté',
                    ])
                    ->default('pending')
                    ->required(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')->label('Entreprise')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('sector')->label('Secteur')->searchable(),
                Tables\Columns\TextColumn::make('contact_name')->label('Contact')->searchable(),
                Tables\Columns\TextColumn::make('contact_email')->label('Email'),
                Tables\Columns\TextColumn::make('status')->label('Statut')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'contacted' => 'info',
                        'in_progress' => 'primary',
                        'accepted' => 'success',
                        'rejected' => 'danger',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('created_at')->label('Reçue le')->dateTime('d/m/Y')->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')->label('Statut')->options([
                    'pending' => 'En attente',
                    'contacted' => 'Contacté',
                    'in_progress' => 'En cours',
                    'accepted' => 'Accepté',
                    'rejected' => 'Rejeté',
                ]),
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
            'index' => Pages\ListPartnerships::route('/'),
            'create' => Pages\CreatePartnership::route('/create'),
            'edit' => Pages\EditPartnership::route('/{record}/edit'),
        ];
    }
}
