<?php

namespace App\Repositories;

use App\Models\Device_details;
use App\Repositories\BaseRepository;

class Device_detailsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'place_location',
        'status',
        'descripcion'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Device_details::class;
    }
}
