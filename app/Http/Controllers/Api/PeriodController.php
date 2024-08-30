<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\PeriodRepository;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function index()
    {
        $validated = request()->validate([
            'semester' => 'required|string|unique:periods,semester'
        ]);

        $period = PeriodRepository::create($validated);

        return response()->json($period, 201);
    }
}
