<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Repositories\TaskRepositoryInterface;

class TaskController extends Controller
{
    protected $taskRepo;

    public function __construct(TaskRepositoryInterface $taskRepo)
    {
        $this->taskRepo = $taskRepo;
    }

    public function index(Request $request)
    {
        $filters = $request->only(['status', 'due_date']);
        $tasks = $this->taskRepo->all($filters);
        return response()->json($tasks);
    }

    public function show($id)
    {
        $task = $this->taskRepo->find($id);
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        return response()->json($task);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|string',
            'due_date' => 'nullable|date',
        ]);
        $task = $this->taskRepo->create($validated);
        return response()->json($task, 201);
    }   

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|string',
            'due_date' => 'nullable|date',
        ]);
        $task = $this->taskRepo->update($id, $validated);
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = $this->taskRepo->find($id);
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        $this->taskRepo->delete($id);
        return response()->json(['message' => 'Task deleted'], 204);
    }
}
