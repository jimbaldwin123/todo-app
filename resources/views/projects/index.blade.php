
@extends('app')

@section('content')
    <h2>Projects</h2>
        
    @if(!$projects->count())
        You have no projects
    @else
<div></div>

        <div class="row">
            <div class="col-xs-1">ID</div>
            <div class="col-xs-3"><a href="/?ord={{ (Input::get('ord') == 'asc') ? 'desc' : 'asc' }}&col=name">Name</a></div>
            <div class="col-xs-2"><a href="/?ord={{ (Input::get('ord') == 'asc') ? 'desc' : 'asc' }}&col=slug">Slug</a></div>
            <div class="col-xs-2"><a href="/?ord={{ (Input::get('ord') == 'asc') ? 'desc' : 'asc' }}&col=updated_at">Updated</a></div>
            <div class="col-xs-2"><span class="pull-right">Tasks</span></div>
            <div class="col-xs-2">&nbsp;</div>
        </div>
                            
        @foreach($projects as $project)
            <div class="row" >
        
                <div class="col-xs-1">{{ $project->id }} </div>
                <div class="col-xs-3"><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></div>
                <div class="col-xs-2">{{ $project->slug}}</div>
                <div class="col-xs-2">{{ date('Y-m-d', strtotime($project->updated_at)) }}</div>
                <div class="col-xs-2"><span class="pull-right">{{ $project->tasks->count() }}</span></div>
        
                <div class="col-xs-2">
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                    {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!} 
                    {!! Form::submit('Delete', array('class' => 'btn btn-info confirm')) !!}
                    {!! Form::close() !!}
                </div>
                    
            </div>
        @endforeach

    @endif
    <p>
        {!! link_to_route('projects.create', 'Create Project') !!}
    </p>

    <div>
        <form method="POST" action="http://todo.jimbaldwin.dev/projects/sdf" accept-charset="UTF-8" class="form-inline"><input name="_method" type="hidden" value="DELETE">
            <input name="_token" type="hidden" value="sw7yKaETJfAoqmb7VmcCuo9JkFy91ksryXhPbeCr">
            <a href="http://todo.jimbaldwin.dev/projects/sdf/edit" class="btn btn-info">Edit</a>
            <input class="btn btn-info confirm" type="submit" value="Delete">
        </form>
    </div>

    <table class="table table-bordered" id="projects-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Test</th>
        </tr>
        </thead>
    </table>

@push('scripts')
<script>

    $(function() {

        $('#projects-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/datatables/data',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'slug', name: 'slug' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' },
                { data: 'edit', name: 'edit' }
//                { data: 'delete', name: 'delete' }
            ]
        });

//        $('#projects-table').on( "click", 'a.edit',function(event){
//
//            event.preventDefault();
//            var action = this;
//            $.ajax({
//                url: action,
//                type: 'EDIT',  // user.destroy
//                success: function(result) {
//                    // Do something with the result
//                }
//            });
//            event.preventDefault();
//        });
    });
</script>
@endpush

