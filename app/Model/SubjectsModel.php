<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubjectsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subjects';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject_type', 'full_name', 'email','contact','age','fathers_name','mothers_name','gender','occupation','nationality','nid','dob','status'
    ];
}
