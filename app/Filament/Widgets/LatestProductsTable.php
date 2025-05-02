<?php

namespace App\Filament\Widgets;

use App\Models\Products;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestProductsTable extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    protected static ?string $heading = 'Produk Terbaru';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Products::query()->latest()->limit(5)
            )
            ->columns([
                Tables\Columns\ImageColumn::make('images.image_path')
                    ->label('Gambar Produk')
                    ->defaultImageUrl(url('/default-product.jpg')),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Produk')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategori'),
                Tables\Columns\TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat pada')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->label('Lihat')
                    ->url(fn(Products $record): string => route('filament.admin.resources.products.edit', $record))
                    ->icon('heroicon-o-eye'),
            ]);
    }
}