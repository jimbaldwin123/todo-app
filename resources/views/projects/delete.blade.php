@extends('app')
 
@section('content')
    <h2>{{ $project->name }}</h2>
 
    <div class="container">
    
            <div class="jumbotron text-center">
                <h1>Do you want to delete {{ $project->name }}? </h1>
                    
                {!! Form::open(['url'=> '/delete', 'class'=>'form']) !!}
                {!! Form::hidden('id', $project->id)!!}
                
                <div class="form-group">
                    {!! Form::submit('Delete Project', ['class' => 'btn btn-info']) !!}
                    <a href="{!! action('ProjectsController@index') !!}"
                    class="btn btn-info"> No </a>
                </div>
                {!! Form::close() !!}
            
            </div>
    </div>
 
    <p>
        {!! link_to_route('projects.index', 'Back to Projects') !!} |
    </p>
@endsection