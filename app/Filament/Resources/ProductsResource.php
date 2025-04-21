<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Models\Products;
use App\Models\ProductImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use App\Filament\Resources\ProductsResource\Pages\ListProducts;
use App\Filament\Resources\ProductsResource\Pages\CreateProducts;
use App\Filament\Resources\ProductsResource\Pages\EditProducts;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Informasi Produk';
    protected static ?string $pluralModelLabel = 'Produk';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Produk')
                    ->required(),

                Textarea::make('description')
                    ->label('Deskripsi'),

                TextInput::make('price')
                    ->label('Harga')
                    ->numeric()
                    ->required(),

                Select::make('category_id')  // Menambahkan input kategori
                    ->label('Kategori')
                    ->searchable()
                    ->options(\App\Models\Categories::all()->pluck('name', 'id'))  // Menampilkan kategori dari model Category
                    ->required(),

                Repeater::make('images')
                    ->label('Gambar Produk')
                    ->relationship('images')
                    ->schema([
                        FileUpload::make('image_path')
                            ->label('Upload Gambar')
                            ->image()
                            ->directory('product_images')
                            ->required(),
                    ])
                    ->minItems(1)
                    ->maxItems(5),
            ]);
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('name')->label('Nama Produk')->sortable(),
            TextColumn::make('price')->label('Harga')->sortable(),

            ImageColumn::make('images.image_path')
                ->label('Gambar Produk')
                ->defaultImageUrl(url('/default-product.jpg')),

            TextColumn::make('category.name') // tampilkan nama kategori
                ->label('Kategori')
                ->sortable(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make()
                ->label('Hapus Produk')
                ->icon('heroicon-o-trash')
                ->color('danger')
                ->requiresConfirmation()
                ->modalHeading('Hapus Produk yang Dipilih?')
                ->modalSubheading('Tindakan ini tidak bisa dibatalkan. Lanjutkan?')
                ->modalButton('Ya, Hapus'),
        ])
        ->recordUrl(null);
}


    public static function getRelations(): array
    {
        return [
            ProductResource\RelationManagers\ImagesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
