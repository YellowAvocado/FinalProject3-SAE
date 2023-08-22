<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $this->authorize('index', Project::class);

        return view('admin.index', [
            'projects' => Project::all(),
            'types' => Type::all()
        ]);
    }

    public function create(Request $request)
    {
        $this->authorize('create',Project::class);

        return view ('projects.create', [
            'projects' => Project::all(),
            'types' => Type::all()
        ]);
    }

    public function store(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:150',
            'short_title' => 'required|string|max:50',
            'description' => 'required',
            'type_id' => 'required',
            'image' => 'required|file',
        ]);

        $path = $request->file('image')->store('public/images');

        Project::create([
            'title' => $request->title,
            'short_title' =>  $request->short_title,
            'description' =>  $request->description,
            'type_id' =>  $request->type_id,
            'images' => $path,
        ]);

        return redirect()->route('projects.index')->with('success', 'New project created!');
    }

    public function edit($id)
    {
        $this->authorize('update', Project::class);

        return view('projects.edit', [
            'project' => Project::find($id),
            'types' => Type::all()
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $path = $request->file('image')->store('public/images');

        $project->update([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'type_id' => $request->type_id,
            'description' => $request->description,
            'images' => $path,
        ]);

        return redirect(route('admin.index'));
    }

    public function destroy($id)
    {
        $this->authorize('update',Project::class);

        $project = Project::find($id);

        $project->delete();

        return redirect(route('admin.index'));
    }
}

