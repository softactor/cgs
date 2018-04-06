@extends("backend.layout.app")
@section("content_area")
<div class="panel-heading">
    <div class="panel-title">Problem Solutions List</div>
</div>
<div class="panel-body">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
        <thead>
            <tr>
                <th>#</th>
                <th>Problem</th>
                <th>Solution</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($problem_solution_list as $service)
            <tr>   
                <td>#</td>
                <td>{{ $service->problem_type_id }}</td>
                <td>{{ $service->solution_id }}</td>
                <td><a href="#">Eidt</a>| <a href="#">Delete</a></td>
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
@endsection