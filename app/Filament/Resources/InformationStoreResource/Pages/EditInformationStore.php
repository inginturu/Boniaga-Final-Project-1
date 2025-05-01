<?php

namespace App\Filament\Resources\InformationStoreResource\Pages;

use App\Filament\Resources\InformationStoreResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformationStore extends EditRecord
{
    protected static string $resource = InformationStoreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
    public static function canDelete(): bool
    {
        return false;
    }

}
