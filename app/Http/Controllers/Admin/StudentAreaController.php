<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\RequestSecretary;
use App\Models\Admin\StudentArea;
use App\Models\Admin\Enroll;
use App\Models\Admin\CourseRelease;
use Illuminate\Http\Request;

class StudentAreaController extends Controller
{
    public function __construct(StudentArea $student_area,
                                RequestSecretary $request_secretary,
                                Enroll $enroll,
                                CourseRelease $course_release)
    {

        $this->enroll = $enroll;
        $this->student_area = $student_area;
        $this->request_secretary = $request_secretary;
        $this->course_release = $course_release;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;
        $request_secretaries = $this->request_secretary->where('user_id', '=', $user)->get();
        $enrolls_active = $this->enroll->where('user_id', '=', $user)
                                ->where('status_enroll_id', '=', 2)
                                ->get();        
        $enrolls_finish = $this->enroll->where('user_id', '=', $user)
                                ->where('status_enroll_id', '=', 5)
                                ->get();        
        $student_areas = $this->student_area->all();
        $course_release_open = $this->course_release->where('status_release_id', '=', '2');

        return view('admin.student_area.index', compact('student_areas', 'request_secretaries', 'enrolls_active', 'enrolls_finish', 'course_release_open'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student_area.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
