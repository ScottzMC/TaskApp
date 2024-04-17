<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller {
    public function index(){
        $tasks = Task::where('completed', false)->orderBy('priority', 'desc')->orderBy('due_date')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create(){
        return view('tasks.create');
    }

    public function edit(Task $task){
        return view('tasks.edit', compact('task'));
    }

    public function store(StoreTaskRequest $request){
        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'priority' => $request->input('priority'),
            'due_date' => $request->input('due_date'),
            'completed' => 0,
        ]);
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function update(UpdateTaskRequest $request, Task $task){
        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'priority' => $request->input('priority'),
            'due_date' => $request->input('due_date'),
            'completed' => false
        ]);
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }

    public function complete(Task $task){
        $task->update([
            'completed' => true,
            'completed_at' => now(),
        ]);
        return redirect()->route('tasks.index')->with('success', 'Task completed successfully.');
    }

    public function showCompleted(){
        $completedTask = Task::where('completed', true)->orderBy('completed_at', 'desc')->get();
        return view('tasks.show', compact('completedTask'));
    }

}
