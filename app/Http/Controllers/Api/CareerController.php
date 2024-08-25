<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Repositories\CareerRepository;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
        ]);

        $career = CareerRepository::create($validated);

        return response()->json($career, 201);
    }
}
