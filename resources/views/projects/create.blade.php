<!-- /resources/views/projects/create.blade.php -->
@extends('app')
 
@section('content')
<div class="container">
        <div class="jumbotron text-center">
        
            <h1>Create Project</h1>
 
            {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
                @include('projects/partials/_form', ['submit_text' => 'Create Project'])
            {!! Form::close() !!}
        </div>
</div>
@endsection
 

