<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();
        return response()->json($task);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'status' => 'required',
        ]);

        $taskstore = Task::create($request->all());
        return response()->json($task, 201);
    }

    public function show(string $id)
    {
        $taskstore = Task::findOrFail($id);
        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $dog = Task::findOrFail($id);
        $dog->update($request->all());
    }

    public function destroy($id)
    {
        $dog = Task::findOrFail($id);
        $dog->delete();
    }
}
