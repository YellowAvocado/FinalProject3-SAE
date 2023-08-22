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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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

        /*dd($request->all());*/

        return redirect(route('admin.index'));
    }

}
