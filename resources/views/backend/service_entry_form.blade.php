<!DOCTYPE html>
<html lang="en">
    <head>
        <title>cgs</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <h2>Service Entry Form</h2>
            <form class="form-horizontal" action="{{ url('admin/service_entry_store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-sm-4" for="name">Name</label>
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
