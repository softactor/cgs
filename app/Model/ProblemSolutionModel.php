<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProblemSolutionModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'problem_solutions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'problem_type_id','solution_id'
    ];
}
