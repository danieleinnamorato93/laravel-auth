<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return view("admin.projects.create",);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formdata = $request->validate([
            "title"=>"required|max:255|min:3|string|",
            "content"=>"required|max:255|min:3|string|",
            "url"=>"required|url",
        ],[
            "title.required"=>"Il titolo è necessario",
            "content.required"=>"La descrizione è necessaria",
            "url.required"=>"L' URL è  necessario",
        ]);
        $projectData = $request->all();
        $project = Project::create($projectData);
        return redirect()->route("admin.projects.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view("admin.projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $projectData=$request->validate([
            "title"=>"required|max:255|min:3|string|",
            "content"=>"required|max:255|min:3|string|",
            "url"=>"required|url",
        ],[
            "title.required"=>"Il titolo è necessario",
            "content.required"=>"La descrizione è necessaria",
            "url.required"=>"L' URL è  necessario",
        ]);
      
        $project = Project::findOrFail($id);
        $project->update($projectData);
        return redirect()->route("admin.projects.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route("admin.projects.index");
    }

    public function __construct()
    {
        $this->middleware("auth");
    }
}
