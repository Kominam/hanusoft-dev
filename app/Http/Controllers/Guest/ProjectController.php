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
        //find id of current project 
        $project = $this->project->findBySlug($slug);
        //find prev, next
        $count = $this->project->count();
        $prev = null;
        $next = null;
        $nextProjectSlug = '#';
        $prevProjectSlug = '#';
        if ($project->id ===1)
        {
            $next = ++$project->id;
        } else if($project->id == $count) {
            $prev = --$project->id; 
        } else {
            $prev = --$project->id;
            $next = ++$project->id;
        }
        
        if ($next !== null)
        $nextProjectSlug = \App\Models\Project::find($next)->slug;
        if ($prev !== null)
        $prevProjectSlug = \App\Models\Project::find($prev)->slug;

        //find related project
        $relatedProjects = $this->project->findRelated($project->id,$project->type);
        return Response::json([
            'project' => $project,
            'prev' =>$prevProjectSlug,
            'next' => $nextProjectSlug,
            'relatedProjects' => $relatedProjects
            ]);
    }
}

