<?php

namespace App\Filament\Widgets;

use App\Models\Products;
use App\Models\Categories;
use App\Models\StoreInfo; // Sesuaikan jika nama model info toko berbeda
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    
    protected function getStats(): array
    {
        return [
            Stat::make('Total Produk', Products::count())
                ->description('Total produk ulos yang tersedia')
                ->descriptionIcon('heroicon-o-shopping-bag')
                ->color('success'),
                
            Stat::make('Total Kategori', Categories::count())
                ->description('Jumlah kategori produk')
                ->descriptionIcon('heroicon-o-tag')
                ->color('warning'),
                
            Stat::make('Produk Terbaru', function() {
                $latestProduct = Products::latest()->first();
                return $latestProduct ? $latestProduct->name : 'Belum ada produk';
            })
                ->description('Produk terakhir yang ditambahkan')
                ->descriptionIcon('heroicon-o-sparkles')
                ->color('primary'),
        ];
    }
}