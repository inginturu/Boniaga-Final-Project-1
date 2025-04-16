<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformationStoreResource\Pages;
use App\Filament\Resources\InformationStoreResource\RelationManagers;
use App\Models\InformationStore;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformationStoreResource extends Resource
{
    protected static ?string $model = InformationStore::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static ?string $navigationGroup = 'Informasi Toko';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->label('Nama Toko')->required(),
            TextInput::make('title')->label('Judul Halaman')->required(),
            TextInput::make('address')->label('Alamat')->nullable(),
            TextInput::make('whatsapp_number')->label('Nomor WhatsApp')->tel()->nullable(),
            TextInput::make('email')->label('Email')->email()->nullable(),
            FileUpload::make('logo')->label('Logo')->image()->nullable(),
            Textarea::make('content')->label('Deskripsi')->rows(5)->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama Toko'),
                TextColumn::make('title')->label('Judul Halaman'),
                TextColumn::make('address')->label('Alamat'),
                TextColumn::make('whatsapp_number')->label('Nomor WhatsApp'),
                TextColumn::make('email')->label('Email'),
                ImageColumn::make('logo')->label('Logo'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListInformationStores::route('/'),
            'create' => Pages\CreateInformationStore::route('/create'),
            'edit' => Pages\EditInformationStore::route('/{record}/edit'),
        ];
    }
}
