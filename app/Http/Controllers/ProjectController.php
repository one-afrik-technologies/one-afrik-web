<?php

namespace App\Http\Controllers;

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

		return view('projects.index', compact('projects'));
	}

	/**
	 * Show All projects in admin panel
	 */
	public function admin()
	{
		$projects = Project::all();

		return view('projects.admin', compact('projects'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'description' => 'required',
		]);

		Project::create($request->all());

		return redirect()->route('projects.index')
			->with('success', 'Project created successfully.');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		$project = Project::find($id);

		return view('projects.show', compact('project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		$project = Project::find($id);

		return view('projects.edit', compact('project'));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{
		$request->validate([
			'name' => 'required',
			'description' => 'required',
		]);

		$project = Project::find($id);
		$project->update($request->all());

		return redirect()->route('projects.index')
			->with('success', 'Project updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		Project::destroy($id);

		return redirect()->route('projects.index')
			->with('success', 'Project deleted successfully');
	}
}
