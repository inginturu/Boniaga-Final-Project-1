<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Route;

Route::get('/', [CategoriesController::class, 'index'])->name('categories');
    
Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


Route::get('/contoh', function () {
    return view('halo.index');
});

Route::get('/tentangkami', function () {
    return view('about.tentangkami');
});

Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return 'Cache cleared';
});

Route::get('/link-storage', function () {
    Artisan::call('storage:link');
    return 'Linked!';
});

Route::get('/assets', function () {
    Artisan::call('filament:assets');
    return 'Migrated!';
});

Route::get('/diagnosa-penyimpanan-boniaga-12345', function () {
    // Ganti dengan nama file gambar yang SEHARUSNYA ada
    $namaFileContoh = 'logos/01K3QR9TX6SDVS0635GEDXAXY2.png';

    $linkPath = public_path('storage');
    $targetPath = storage_path('app/public');

    $hasilDiagnosa = [
        '1. INFORMASI DASAR' => [
            'Document Root' => $_SERVER['DOCUMENT_ROOT'],
            'Laravel public_path()' => public_path(),
            'Laravel storage_path()' => storage_path(),
        ],
        '2. PENGECEKAN FILE FISIK DI VOLUME' => [
            'Path yang dicek' => storage_path('app/public/' . $namaFileContoh),
            'Apakah file ADA?' => Storage::disk('public')->exists($namaFileContoh) ? 'YA, DITEMUKAN ✅' : 'TIDAK DITEMUKAN ❌',
        ],
        '3. PENGECEKAN SYMBOLIC LINK' => [
            'Path link yang dicek' => $linkPath,
            'Apakah file/folder "public/storage" ADA?' => File::exists($linkPath) ? 'YA ✅' : 'TIDAK ADA ❌',
            'Apakah "public/storage" adalah sebuah LINK?' => is_link($linkPath) ? 'YA, INI ADALAH LINK ✅' : 'BUKAN LINK ❌',
            'Link ini menunjuk ke mana?' => is_link($linkPath) ? readlink($linkPath) : 'N/A',
            'Path target seharusnya' => $targetPath,
        ],
        '4. PENGECEKAN PERMISSIONS (IZIN FOLDER)' => [
            'Izin folder storage' => substr(sprintf('%o', fileperms(storage_path())), -4),
            'Izin folder storage/app' => substr(sprintf('%o', fileperms(storage_path('app'))), -4),
            'Izin folder storage/app/public' => substr(sprintf('%o', fileperms($targetPath)), -4),
        ]
    ];

    // Tampilkan hasil
    dd($hasilDiagnosa);
});