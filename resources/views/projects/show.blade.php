@extends('app')

@section('content')
    <h1>Project: {{ $project->name }}</h1>
    @include('projects/partials/_local_nav')
    @if ( !$project->tasks->count() )
        Your project has no tasks.
    @else

    {{-- Form::open(['url'=> '/projects/{projects}']) --}}
    {!! Form::open(array('method' => 'POST', 'url' => array('projects', $project->slug))) !!}
        {!! Form::hidden('ord', (null !== Input::get('ord')) ? Input::get('ord') : 'desc') !!}
        {!! Form::hidden('col', (null !== Input::get('col')) ? Input::get('col') : 'updated_at') !!}
        <div class="form-group">
            {!! Form::label('search', 'Description contains:') !!}
            {!! Form::text('search', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!} 

    @if(!empty($input['search'])) 
        <strong>Results matching '{{ $input['search'] }}':</strong>
    @endif

            <div class="container-fluid">

<h2></h2>
                <div class="row">
                <div class="col-xs-1">&nbsp</div>
                <div class="col-xs-3"><a href="/{{ Request::path() }}?ord={{ (Input::get('ord') == 'asc') ? 'desc' : 'asc' }}&col=name&search={{ Input::get('search') }}">Title</a></div>
                <div class="col-xs-3"><a href="/{{ Request::path() }}?ord={{ (Input::get('ord') == 'asc') ? 'desc' : 'asc' }}&col=description&search={{ Input::get('search') }}">Body</a></div>
                <div class="col-xs-2"><a href="/{{ Request::path() }}?ord={{ (Input::get('ord') == 'asc') ? 'desc' : 'asc' }}&col=updated_at&search={{ Input::get('search') }}">Updated</a></div>
                <div class="col-xs-1"><a href="/{{ Request::path() }}?ord={{ (Input::get('ord') == 'asc') ? 'desc' : 'asc' }}&col=completed&search={{ Input::get('search') }}">Finished?</a></div>
                <div class="col-xs-2">&nbsp;</div>
            </div>
                
                @foreach($project->tasks(Input::get("col"),Input::get("ord"))->get() as $task)
                    
                    @if(empty($input['search']) || strpos(strtoupper($task->description),strtoupper($input['search'])) !== false)
                    <div class="row" >
                        <div class="col-xs-1">{{ $task->id }} </div>
                        <div class="col-xs-3"><a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a></div>
                        <div class="col-xs-3">{{ $task->description }}</div>
                        <div class="col-xs-2">{{ date('Y-m-d', strtotime($task->updated_at)) }}</div>
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
    @endif
 
@include('projects/partials/_local_nav')
@endsection




