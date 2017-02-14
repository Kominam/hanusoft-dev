<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Eloquent\ProjectRepository as Project;
use Response;

class ProjectController extends Controller
{
	private $project;

    public function __construct(Project $project)
    {
    	$this->project = $project;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return Response::json(['projects' => $this->project->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return Response::json(['projects' => $this->project->findBySlug($slug)]);
    }

}
