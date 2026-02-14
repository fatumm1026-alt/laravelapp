<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Library;
use App\Models\Sport;

class StudentManagementController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 1️⃣ Store Student
    |--------------------------------------------------------------------------
    */

    public function storeStudent(Request $request)
    {
        $request->validate([
            'admission_no' => 'required|unique:students,admission_no',
            'first_name'   => 'required|string|max:255',
            'father_name'  => 'required|string|max:255',
            'status'       => 'required|in:Active,Inactive'
        ]);

        $student = Student::create([
            'admission_no' => $request->admission_no,
            'first_name'   => $request->first_name,
            'father_name'  => $request->father_name,
            'status'       => $request->status
        ]);

        return response()->json([
            'message' => 'Student created successfully',
            'data'    => $student
        ], 201);
    }

    /*
    |--------------------------------------------------------------------------
    | 2️⃣ Store Library Entry
    |--------------------------------------------------------------------------
    */

    public function storeLibrary(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'book_title' => 'required|string|max:255',
            'issue_date' => 'required|date',
            'return_date'=> 'nullable|date|after_or_equal:issue_date',
            'status'     => 'required|in:Issued,Returned,Late'
        ]);

        $library = Library::create([
            'student_id' => $request->student_id,
            'book_title' => $request->book_title,
            'issue_date' => $request->issue_date,
            'return_date'=> $request->return_date,
            'status'     => $request->status
        ]);

        return response()->json([
            'message' => 'Library record created successfully',
            'data'    => $library
        ], 201);
    }

    /*
    |--------------------------------------------------------------------------
    | 3️⃣ Store Sport Entry
    |--------------------------------------------------------------------------
    */

    public function storeSport(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'sport_name' => 'required|string|max:255',
            'team_name'  => 'nullable|string|max:255',
            'position'   => 'nullable|string|max:255',
            'coach_name' => 'nullable|string|max:255',
            'join_date'  => 'required|date',
            'status'     => 'required|in:Active,Inactive'
        ]);

        $sport = Sport::create([
            'student_id' => $request->student_id,
            'sport_name' => $request->sport_name,
            'team_name'  => $request->team_name,
            'position'   => $request->position,
            'coach_name' => $request->coach_name,
            'join_date'  => $request->join_date,
            'status'     => $request->status
        ]);

        return response()->json([
            'message' => 'Sport record created successfully',
            'data'    => $sport
        ], 201);
    }
}
