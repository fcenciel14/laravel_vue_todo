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

    public function show($id)
    {
        $task = Task::find($id);
        if ($task) {
            return $task;
        } else {
            return response()->json([
                'message' => 'Task not found',
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        if ($task) {
            $task->update([
                'title' => $request->title ?? $task->title,
                'content' => $request->content ?? $task->content,
                'pic' => $request->pic ?? $task->pic,
            ]);
            return response()->json([
                'message' => 'Updated successfully',
            ]);
        } else {
            return response()->json([
                'message' => 'Task not found',
            ]);
        }
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        if ($task) {
            $task->delete();
            return response()->json([
                'message' => 'Deleted successfully',
            ]);
        } else {
            return response()->json([
                'message' => 'Task not found',
            ]);
        }
    }
}
