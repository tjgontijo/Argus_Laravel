<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Enroll;
use App\Models\Admin\FunctionEnroll;
use App\Models\Admin\StatusEnroll;
use App\Models\Admin\CourseRelease;
use App\User;

class EnrollController extends Controller
{
    
    public function __construct(Enroll $enroll, FunctionEnroll $function, StatusEnroll $status, CourseRelease $course_release, User $user ){

        $this->enroll = $enroll;
        $this->function = $function;
        $this->status = $status;
        $this->course_release = $course_release;
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrols = $this->enroll->all();        

        return view('admin.enroll.index' , compact('enrols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enrolls = $this->enroll->all();
        $functions = $this->function->all();
        $status = $this->status->all();
        $course_releases = $this->course_release->all();
        $users = $this->user->all();        

        return view('admin.enroll.create-edit', compact('enrolls','functions','status','course_releases','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->all();

        $insert = $this->enroll->create($dataForm);
        
        if ($insert) {
            return redirect('/admin/enroll');
        } else {
            return redirect('/admin/enroll/create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $enroll = $this->enroll->find($id);

       return view('admin.enroll.show', compact('enroll'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enroll = $this->enroll->find($id);
        $functions = $this->function->all();
        $status = $this->status->all();
        $course_releases = $this->course_release->all();
        $users = $this->user->all();

        return view('admin.enroll.create-edit', compact('enroll','functions','status','course_releases','users'));
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
        $dataForm = $request->all();

        $enroll = $this->enroll->find($id);

        $update = $enroll->update($dataForm);

        if ($update) {
            return redirect('/admin/enroll');
        } else {
            return redirect('/admin/enroll/create');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enroll = $this->enroll->find($id);

        $delete = $enroll->delete();

        if ($delete) {
            return redirect('/admin/enroll');
        }
    }
}
