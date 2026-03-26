<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobOfferResource\Pages;
use App\Models\JobOffer;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class JobOfferResource extends Resource
{
    protected static ?string $model = JobOffer::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-briefcase';

    protected static string | \UnitEnum | null $navigationGroup = 'RH';

    protected static ?string $modelLabel = 'Offre d\'emploi';

    protected static ?string $pluralModelLabel = 'Offres d\'emploi';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Détails de l\'offre')->schema([
                TextInput::make('title')
                    ->label('Titre du poste')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                TextInput::make('location')
                    ->label('Lieu')
                    ->required()
                    ->maxLength(255),
                TextInput::make('department')
                    ->label('Département')
                    ->maxLength(255),
                Select::make('contract_type')
                    ->label('Type de contrat')
                    ->options([
                        'CDI' => 'CDI',
                        'CDD' => 'CDD',
                        'Stage' => 'Stage',
                        'Freelance' => 'Freelance',
                    ])
                    ->default('CDI')
                    ->required(),
                RichEditor::make('description')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('requirements')
                    ->label('Prérequis')
                    ->columnSpanFull(),
            ])->columns(2),

            Section::make('Publication')->schema([
                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
                DateTimePicker::make('expires_at')
                    ->label('Date d\'expiration'),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Poste')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('location')->label('Lieu')->searchable(),
                Tables\Columns\TextColumn::make('contract_type')->label('Contrat')->badge(),
                Tables\Columns\IconColumn::make('is_active')->label('Active')->boolean(),
                Tables\Columns\TextColumn::make('applications_count')->label('Candidatures')->counts('applications'),
                Tables\Columns\TextColumn::make('created_at')->label('Créée le')->dateTime('d/m/Y')->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListJobOffers::route('/'),
            'create' => Pages\CreateJobOffer::route('/create'),
            'edit' => Pages\EditJobOffer::route('/{record}/edit'),
        ];
    }
}
