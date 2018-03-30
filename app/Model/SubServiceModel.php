<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubServiceModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sub_services';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'service_id', 'name'
    ];
}
