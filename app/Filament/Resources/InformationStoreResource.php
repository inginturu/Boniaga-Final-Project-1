<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformationStoreResource\Pages;
use App\Models\InformationStore;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class InformationStoreResource extends Resource
{
    protected static ?string $model = InformationStore::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $navigationGroup = 'Informasi Toko';
    protected static ?string $pluralModelLabel = 'Informasi Toko';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->label('Nama Toko')
                ->required(),

            TextInput::make('address')
                ->label('Alamat')
                ->required(),

            TextInput::make('whatsapp_number')
                ->label('Nomor WhatsApp')
                ->tel()
                ->required(),

            TextInput::make('email')->label('Email')
                ->email()
                ->required(),

            FileUpload::make('logo')
                ->label('Logo')
                ->image()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama Toko'),
                TextColumn::make('address')->label('Alamat'),
                TextColumn::make('whatsapp_number')->label('Nomor WhatsApp'),
                TextColumn::make('email')->label('Email'),
                ImageColumn::make('logo')->label('Logo'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Disable bulk delete
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInformationStores::route('/'),
            // 'create' page disediakan tapi kita akan disable aksesnya di bawah
            'edit' => Pages\EditInformationStore::route('/{record}/edit'),
        ];
    }

    // public static function getNavigationUrl(): string
    // {
    //     $record = InformationStore::first();

    //     return static::getUrl('edit', ['record' => $record]);
    // }

    // Disable tombol create
    public static function canCreate(): bool
    {
        return false;
    }
}