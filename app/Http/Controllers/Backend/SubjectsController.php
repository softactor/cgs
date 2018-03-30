<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SubjectsModel;

class SubjectsController extends Controller
{
    /*
     * subject entry form view page
     */
    public function subject_entry_form(){
        return view("backend\subject_entry_form");
    }
    
    
    public function subject_entry_store(Request $request) {
        $all_value  =   $request->all();        
        $insert_array   =   [
            'subject_type'  => $all_value['subject_type'],
            'full_name'     => $all_value['full_name'],
            'email'         => $all_value['email'],
            'contact'       => $all_value['contact'],
            'age'           => $all_value['age'],
            'fathers_name'  => $all_value['fathers_name'],
            'mothers_name'  => $all_value['mothers_name'],
            'gender'        => $all_value['gender'],
            'occupation'    => $all_value['occupation'],
            'nationality'   => $all_value['nationality'],
            'nid'           => $all_value['nid'],
            'dob'           => $all_value['dob'],
            'status'        => 0,
        ];
        
        SubjectsModel::create($insert_array);
        return redirect('admin/subject_entry_form');
        
    }
}
