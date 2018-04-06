@extends("backend.layout.app")
@section("content_area")
<div class="container">
    <h2>Subject Entry Form</h2>
    <form class="form-horizontal" action="{{ url('admin/subject_entry_store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-4" for="sel1">Subject Type</label>
            <div class="col-sm-8">
                <select class="form-control" id="subject_type" name="subject_type">
                    <option value="">Select</option>
                    <option value="1">Children</option>
                    <option value="2">Girls</option>
                    <option value="3">Senior Citizen</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="full_name">Full Name</label>
            <div class="col-sm-8">          
                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Full Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Email</label>
            <div class="col-sm-8">          
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="contact">Contact</label>
            <div class="col-sm-8">          
                <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="age">Age</label>
            <div class="col-sm-8">          
                <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="fathers_name">Father's Name</label>
            <div class="col-sm-8">          
                <input type="text" class="form-control" id="fathers_name" name="fathers_name" placeholder="Enter Father's Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="mothers_name">Mother's Name</label>
            <div class="col-sm-8">          
                <input type="text" class="form-control" id="mothers_name" name="mothers_name" placeholder="Enter Mother's Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="sel1">Gender</label>
            <div class="col-sm-8">
                <select class="form-control" id="gender" name="gender">
                    <option value="">Select</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="nationality">Nationality</label>
            <div class="col-sm-8">          
                <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter Nationality">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="nid">NID</label>
            <div class="col-sm-8">          
                <input type="text" class="form-control" id="nid" name="nid" placeholder="Enter NID">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="dob">DOB</label>
            <div class="col-sm-8">          
                <input type="text" class="form-control" id="dob" name="dob" placeholder="Enter DOB">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="occupation">Occupation</label>
            <div class="col-sm-8">          
                <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter Occupation">
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-8">
                <input type="submit" class="btn btn-default" value="Submit" name='Submit'>
            </div>
        </div>
    </form>
</div>
@endsection