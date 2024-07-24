<?php

namespace App\Repositories;

use App\Models\Rols;
use App\Repositories\BaseRepository;

class RolsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Rols::class;
    }
}
