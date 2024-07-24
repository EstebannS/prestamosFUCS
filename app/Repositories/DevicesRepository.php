<?php

namespace App\Repositories;

use App\Models\Devices;
use App\Repositories\BaseRepository;

class DevicesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'device_details_id',
        'url'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Devices::class;
    }
}
