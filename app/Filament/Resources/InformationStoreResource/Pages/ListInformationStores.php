<?php

namespace App\Filament\Resources\InformationStoreResource\Pages;

use App\Filament\Resources\InformationStoreResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformationStores extends ListRecords
{
    protected static string $resource = InformationStoreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
