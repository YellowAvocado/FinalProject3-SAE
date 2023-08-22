<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class GraphicDesignController extends Controller
{
    public function index()
    {
        return view('graphdesign.index', [
            'projects' => Project::where('type_id','1')->get(),
        ]);
    }
}
