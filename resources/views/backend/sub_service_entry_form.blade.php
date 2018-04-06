@extends("backend.layout.app")
@section("content_area")

        <div class="container">
            <h2>Sub Service Entry Form</h2>
            <form class="form-horizontal" action="{{ url('admin/sub_service_entry_store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-sm-4" for="sel1">Service</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="service_id" name="service_id">
                            <option value="">Select</option>
                             @foreach($all_services as $data)
                            <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="name">Sub Service</label>
                    <div class="col-sm-8">          
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
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
