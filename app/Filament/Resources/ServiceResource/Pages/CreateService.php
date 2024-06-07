<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use Filament\Actions;
use Illuminate\Support\Str;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ServiceResource;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data['title']);
    
        return $data;
    }
}
