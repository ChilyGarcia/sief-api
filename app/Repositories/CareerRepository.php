<?php

namespace App\Repositories;

use App\Models\Career;

class CareerRepository
{
    public static function create(array $data)
    {
        return Career::create($data);
    }
}
