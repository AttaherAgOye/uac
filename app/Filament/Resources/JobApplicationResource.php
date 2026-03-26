<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobApplicationResource\Pages;
use App\Models\JobApplication;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class JobApplicationResource extends Resource
{
    protected static ?string $model = JobApplication::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    protected static string | \UnitEnum | null $navigationGroup = 'RH';

    protected static ?string $modelLabel = 'Candidature';

    protected static ?string $pluralModelLabel = 'Candidatures';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informations du candidat')->schema([
                TextInput::make('first_name')->label('Prénom')->required(),
                TextInput::make('last_name')->label('Nom')->required(),
                TextInput::make('email')->label('Email')->email()->required(),
                TextInput::make('phone')->label('Téléphone')->required(),
                TextInput::make('desired_position')->label('Poste souhaité'),
                Select::make('job_offer_id')
                    ->label('Offre liée')
                    ->relationship('jobOffer', 'title')
                    ->searchable()
                    ->preload(),
            ])->columns(2),

            Section::make('Documents & Statut')->schema([
                FileUpload::make('cv_path')
                    ->label('CV')
                    ->directory('cvs')
                    ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']),
                Select::make('status')
                    ->label('Statut')
                    ->options([
                        'pending' => 'En attente',
                        'reviewed' => 'Examinée',
                        'shortlisted' => 'Présélectionnée',
                        'rejected' => 'Rejetée',
                        'accepted' => 'Acceptée',
                    ])
                    ->default('pending')
                    ->required(),
                Textarea::make('message')->label('Message')->rows(4)->columnSpanFull(),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label('Candidat')
                    ->state(fn ($record) => $record->first_name . ' ' . $record->last_name)
                    ->searchable(['first_name', 'last_name']),
                Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
                Tables\Columns\TextColumn::make('desired_position')->label('Poste')->searchable(),
                Tables\Columns\TextColumn::make('jobOffer.title')->label('Offre liée')->placeholder('Spontanée'),
                Tables\Columns\TextColumn::make('status')->label('Statut')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'reviewed' => 'info',
                        'shortlisted' => 'primary',
                        'rejected' => 'danger',
                        'accepted' => 'success',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('created_at')->label('Reçue le')->dateTime('d/m/Y')->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')->label('Statut')->options([
                    'pending' => 'En attente',
                    'reviewed' => 'Examinée',
                    'shortlisted' => 'Présélectionnée',
                    'rejected' => 'Rejetée',
                    'accepted' => 'Acceptée',
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
            'index' => Pages\ListJobApplications::route('/'),
            'create' => Pages\CreateJobApplication::route('/create'),
            'edit' => Pages\EditJobApplication::route('/{record}/edit'),
        ];
    }
}
