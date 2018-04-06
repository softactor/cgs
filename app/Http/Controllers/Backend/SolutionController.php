<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SolutionModel;
use App\Model\ProblemModel;
use App\Model\ProblemSolutionModel;

class SolutionController extends Controller
{
    /*
     * Service entry form view page
     */
    public function solution_list(){
        $solution_list   =   SolutionModel::all();
        return view("backend\solutions_list", compact("solution_list"));
    }
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
    
    public function problem_solution_form(){
        $all_problems   =   ProblemModel::all();
        $all_solutions   =   SolutionModel::all();
        return view("backend\problem_solution_form", compact('all_problems','all_solutions'));
    }
    
    public function problem_solution_store(Request $request) {
        $problem_id     =   $request->problem_id;
        $solution_ids   =   $request->solutions;
        foreach($solution_ids as $solution_id){
            $insert_array   =   [
                'problem_type_id'   => $problem_id,
                'solution_id'       => $solution_id
            ];
        ProblemSolutionModel::create($insert_array);
        }
        
        return redirect('admin/problem_solution_form');
        
    }
    
    
    public function problem_solution_list(){
        $problem_solution_list   =   ProblemSolutionModel::all();
        return view("backend\problem_solutions_list", compact("problem_solution_list"));
    }
    
}
