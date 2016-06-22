<?php

// ProjectsController

namespace App\Http\Controllers;

use DB;
use Input;
use Redirect;
use App\Project;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

use Illuminate\Http\Request;

class ProjectsController extends Controller {
    
        public function __construct(){
            $this->middleware('auth', ['only' => ['edit','create','store','update','destroy']]);
	    	$this->ord = Input::get("ord");
	        $this->col = Input::get("col");
        }

	protected $rules = [
		'name' => ['required', 'min:3'],
		'slug' => ['required'],
	];
        
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	    // $projects = Project::all();

		if($this->ord){
		    $projects = Project::orderBy($this->col,$this->ord)->get();
		}else{
			$projects = Project::all();
		}
        return view('projects.index', compact('projects'));
	}
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {

        // $projects = Project::all();
        // $projects = Project::with('tasks')->get();

		$projects = Project::join('tasks', 'tasks.project_id', '=', 'projects.id')
            ->groupBy('projects.id')
            ->get([
                'projects.id',
                'projects.name',
                'projects.slug',
                'projects.created_at',
                'projects.updated_at',
                DB::raw('count(tasks.id) as count')
            ]);

        $z = Datatables::of($projects)
            ->editColumn('name','<a href="projects/{{$slug}}" >{{$name}}</a>')
            ->addColumn('edit','<a href="projects/{{$slug}}/edit" class="edit btn btn-info">EDIT</a>')
             ->addColumn('test','<a href="projects/{{$slug}}/delete" class="delete confirm btn btn-info">DELETE</a>')
            ->make(true);
        return $z;
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
        
        
	public function create()
	{
            return view('projects.create');
	}
	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
        public function store(Request $request)
        {
                $this->validate($request, $this->rules);

                $input = Input::all();
                Project::create( $input );

                return Redirect::route('projects.index')->with('message', 'Project created');
        }

	/**
	 * Display the specified resource.
	 *
	 * @param \App\Project $project
	 * @return Response
	 */
	public function show(Project $project)
	{
	    $input = Input::all();
	    // $input['description'] = Input::get('description');
	    if(isset($input['description'])){
		// print $input['description']; exit;
	    }
	    
	    // $tasks = $project->tasks->orderBy('name','desc')->get();
	    // return view('projects.show', compact('tasks'));

        return view('projects.show', compact('project','input'));
            
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \App\Project $project
	 * @return Response
	 */
	public function edit($slug)
	{
            $project = Project::where('slug',$slug)->first();
            return view('projects.edit', compact('project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @param \Illuminate\Http\Request $request
	 * @return Response
	 */
        public function update(Project $project, Request $request)
        {
                $this->validate($request, $this->rules);
                
                $input = array_except(Input::all(), '_method');
                $project->update($input);
         
                return Redirect::route('projects.show', $project->slug)->with('message', 'Project updated.');
        }

        public function delete($project){
            return view('projects.delete', compact('project'));
        }
        
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Project $project
	 * @return Response
	 */
        public function destroy(Project $project)
        {

			dd($project);
            $project->delete();
            return Redirect::route('projects.index')->with('message', 'Project deleted.');
        }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Project $project
	 * @return Response
	 */
	public function destroy_by_slug($slug)
	{
		$project = Project::where('slug',$slug);
		$project->delete();
		return Redirect::route('projects.index')->with('message', 'Project deleted.');
	}

}
