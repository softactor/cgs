<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SubServiceModel;
use App\Model\ServiceModel;

class SubServicesController extends Controller
{
    /*
     * Service entry form view page
     */
    public function sub_service_entry_form(){
        $all_services   =   ServiceModel::all();
        return view("backend\sub_service_entry_form", compact('all_services'));
    }
    
    
    public function sub_service_entry_store(Request $request) {
        $all_value  =   $request->all();        
        $insert_array   =   [
            'name'     => $all_value['name'],
            'service_id'     => $all_value['service_id'],
        ];
        SubServiceModel::create($insert_array);
        return redirect('admin/sub_service_entry_form');
        
    }
}
