<?php

namespace App\Repositories;

use App\Models\StatisticalInformation;

class StatisticalRepository
{
    public static function create(array $data)
    {
        return StatisticalInformation::create($data);
    }
}
