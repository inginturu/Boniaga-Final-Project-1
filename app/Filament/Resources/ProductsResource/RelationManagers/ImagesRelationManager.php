<?php
namespace App\Filament\Resources\ProductResource\RelationManagers;

use App\Models\Product_images;
use Filament\Forms;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\FileUpload::make('image_path')
                ->label('Gambar Produk')
                ->image()
                ->directory('product_images')
                ->required(),
        ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image_path')
                ->label('Gambar Produk'),
        ]);
    }
}
