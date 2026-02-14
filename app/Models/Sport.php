<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sport extends Model
{
    use SoftDeletes;

    protected $table = 'sports';

    protected $fillable = [
        'student_id',
        'sport_name',
        'team_name',
        'position',
        'coach_name',
        'join_date',
        'status'
    ];



    /*
    |--------------------------------------------------------------------------
    | Relationship
    |--------------------------------------------------------------------------
    */


    
}
