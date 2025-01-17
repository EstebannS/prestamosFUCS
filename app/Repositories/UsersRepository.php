<?php

namespace App\Repositories;

use App\Models\Users;
use App\Repositories\BaseRepository;

class UsersRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'role_id',
        'phone_number',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Users::class;
    }
}
