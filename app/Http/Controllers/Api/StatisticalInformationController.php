<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StatisticalInformation;
use App\Repositories\StatisticalRepository;
use Illuminate\Http\Request;

class StatisticalInformationController extends Controller
{
    //

    public function index()
    {
        $validated = request()->validate([
            'enrolled_students' => 'required|integer',
            'admitted_students' => 'required|integer',
            'graduated_students' => 'required|integer',
            'dropout_students' => 'required|integer',
            'career_id' => 'required|integer|exists:careers,id'
        ]);

        $statisticalInformation = StatisticalRepository::create($validated);

        return response()->json($statisticalInformation, 201);
    }
}
