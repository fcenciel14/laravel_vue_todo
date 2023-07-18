<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return response()->json([
            'message' => 'Created successfully',
        ]);
    }
}
