<?php

namespace App\Repositories;

use App\Models\StatisticalInformation;

class StatisticalRepository
{
    public static function create(array $data)
    {
        return StatisticalInformation::create($data);
    }

    public static function getById($id)
    {
        return StatisticalInformation::find($id);
    }

    public static function getByCareerId($careerId)
    {
        return StatisticalInformation::where('career_id', $careerId)->get();
    }
}
