<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ProblemModel;

class ProblemController extends Controller
{
    /*
     * Service entry form view page
     */
    public function problem_list(){
        $problem_type_list   =   ProblemModel::all();
        return view("backend\problem_type_list", compact("problem_type_list"));
    }
    public function problem_entry_form(){
        return view("backend\problem_entry_form");
    }
    
    
    public function problem_entry_store(Request $request) {
        $all_value  =   $request->all();        
        $insert_array   =   [
            'name'     => $all_value['name'],
        ];
        ProblemModel::create($insert_array);
        return redirect('admin/problem_entry_form');
        
    }
}
