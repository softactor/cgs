@extends("backend.layout.app")
@section("content_area")

        <div class="container">
            <h2>Problem Solution Form</h2>
            <form class="form-horizontal" action="{{ url('admin/problem_solution_store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-sm-4" for="sel1">Problems</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="problem_id" name="problem_id">
                            <option value="">Select</option>
                             @foreach($all_problems as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                             @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="sel1">Solutions</label>
                    <div class="col-sm-8">
                        @foreach($all_solutions as $data)
                        <div class="checkbox">
                            <label><input type="checkbox" name="solutions[]" value="{{$data->id}}">{{$data->name}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>                
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-8">
                        <input type="submit" class="btn btn-default" value="Submit" name='Submit'>
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>
@endsection