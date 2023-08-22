<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class UXDesignController extends Controller
{
    public function index(Project $project)
    {
        return view('uxdesign.index', [
            'projects' => Project::where('type_id','2')->get(),
        ]);
    }
}
