<!-- /resources/views/projects/edit.blade.php -->
@extends('app')
 
@section('content')
<div class="container">
        <div class="jumbotron text-center">
        
            <h1>Edit Project c: {{ $project->name }} </h1>
     
            {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
                @include('projects/partials/_form', ['submit_text' => 'Save Project'])
            {!! Form::close() !!}
        </div>
</div>
@endsection
