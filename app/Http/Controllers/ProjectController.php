<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request; 
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $projects = Project::orderBy('name','asc')->paginate(Project::NR_PER_PAGE);
        return view('admin.projects.index', ['projects'=> $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        Project::create($request->all());
        return redirect()->back()->with('succes','Inregistrare cu succes!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', ['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project):View
    {
        return view('admin.projects.edit', ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project):RedirectResponse
    {
        $project->update($request->all());
        return redirect()->back()->with('succes', 'Actualizare cu succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project):RedirectResponse
    { 
        $project->delete();
        return redirect()->route('projects.index')
                         ->with('success','Stergere cu succes!');

    }
}
