<?php

namespace App\Repositories;

use App\Models\Period;

class PeriodRepository
{
    public static function create(array $data)
    {
        return Period::create($data);
    }
}
