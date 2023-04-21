<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// app/Http/Controllers/TaskController.php

class TaskController extends Controller
{
    // Get all tasks
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    // Get a single task by ID
    public function show(Task $task)
    {
        return response()->json($task);
    }

    // Create a new task
    public function store(Request $request)
    {
        $task = new Task([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'due_date' => $request->input('due_date'),
            'status_id' => $request->input('status_id'),
        ]);
        $task->save();

        return response()->json($task, 201);
    }

    // Update an existing task
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return response()->json($task);
    }

    // Delete a task
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(null, 204);
    }
}
