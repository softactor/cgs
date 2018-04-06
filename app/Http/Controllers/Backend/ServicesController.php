<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ServiceModel;

class ServicesController extends Controller
{
    /*
     * Service entry form view page
     */
    
    public function service_list() {
        $all_services   =   ServiceModel::all();
        return view("backend\service_list", compact("all_services"));
    }
    
    public function service_entry_form(){
        return view("backend\service_entry_form");
    }
    
    
    public function service_entry_store(Request $request) {
        $all_value  =   $request->all();        
        $insert_array   =   [
            'name'     => $all_value['name'],
        ];
        ServiceModel::create($insert_array);
        return redirect('admin/service_entry_form');
        
    }
}
