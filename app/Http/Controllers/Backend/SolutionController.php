<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SolutionModel;

class SolutionController extends Controller
{
    /*
     * Service entry form view page
     */
    public function solution_entry_form(){
        return view("backend\solution_entry_form");
    }
    
    
    public function solution_entry_store(Request $request) {
        $all_value  =   $request->all();        
        $insert_array   =   [
            'name'     => $all_value['name'],
        ];
        SolutionModel::create($insert_array);
        return redirect('admin/solution_entry_form');
        
    }
}
