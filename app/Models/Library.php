<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Library extends Model
{
    use SoftDeletes;

    protected $table = 'libraries';

    protected $fillable = [
        'student_id',
        'book_title',
        'issue_date',
        'return_date',
        'status'
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationship
    |--------------------------------------------------------------------------
    */

    // public function student()
    // {
    //     return $this->belongsTo(Student::class, 'student_id');
    // }
}
