@extends("backend.layout.app")
@section("content_area")
<div class="panel-heading">
    <div class="panel-title">Service List</div>
</div>
<div class="panel-body">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solution_list as $service)
            <tr>   
                <td>#</td>
                <td>{{ $service->name }}</td>
                <td><a href="#">Eidt</a>| <a href="#">Delete</a></td>
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
@endsection