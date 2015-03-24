@extends('app')

@section('content')
    <h1>Project: {{ $project->name }}</h1>
    @include('projects/partials/_local_nav')
    @if ( !$project->tasks->count() )
        Your project has no tasks.
    @else

    {!! Form::open(['url'=> '/projects/project-1']) !!}
        <div class="form-group">
            {!! Form::label('description', 'Description contains:') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!} 

    @if(!empty($input['description'])) 
        Results matching '{{ $input['description'] }}':
    @endif
    <!--
        <table class="table">
            <thead>
                <tr>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Finished?</th>
                </tr>
            </thead>
            <tbody>
            -->
            <div class="container-fluid">
                @foreach($project->tasks as $task)
                    
                    {{-- filter results: works but not satisfying, is there a way in the controller --}}
                    @if(empty($input['description']) || strpos(strtoupper($task->description),strtoupper($input['description'])) !== false)
                    <div class="row">
                        <div class="col-xs-1">{{ $task->id }} </div>
                        <div class="col-xs-3"><a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a></div>
                        <div class="col-xs-4">{{ $task->description }}</div>
                        <div class="col-xs-1">{{ $task->completed ? 'Yes' : 'No'}}</div>
                        <div class="col-xs-2">
                            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}
                            {!! link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug), array('class' => 'btn btn-info')) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-info confirm')) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                    
                @endforeach
            </div>
        <!--
        </tbody>
        </table>
        -->
    @endif
 
@include('projects/partials/_local_nav')
@endsection




