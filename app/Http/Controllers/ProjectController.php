<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Project;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::all(),
            'types' => Type::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       /* $this->authorize('create',Project::class);*/

        return view ('projects.create', [
            'projects' => Project::all(),
            'types' => Type::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project)
    {
       /* $this->authorize('store',Project::class);*/

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('projects.show', [
            'projects' => Project::find($id),
            'types' => Type::all(),
        ]);

        return view('projects.show', $project->id);
    }

    /**
     * Show the form for editing the specified resource.s
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       /* $this->authorize('edit',Project::class);*/

        return view('projects.edit', [
            'project' => Project::find($id),
            'types' => Type::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        /*dd($request->file('image'));*/
        $path = $request->file('image')->store('public/images');

        $project->update([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'type_id' => $request->type_id,
            'description' => $request->description,
            'images' => $path,
        ]);

        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$this->authorize('destroy',Project::class);*/

        $project = Project::find($id);

        $project->delete();

        return redirect(route('projects.index'));
    }
}
