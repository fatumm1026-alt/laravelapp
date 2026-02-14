<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $table = 'students';

    protected $fillable = [
                'admission_no',
                'first_name',
                'father_name',
                'status'
    ];



    /*
    |--------------------------------------------------------------------------
    | Relationships (No Foreign Keys, Only Logical)
    |--------------------------------------------------------------------------
    */

}
