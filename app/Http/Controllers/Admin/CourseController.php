<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Course;
use App\Models\Admin\UnitTeach;
use App\Models\Admin\Unit;
use App\Models\Admin\CourseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    public function __construct(Course $course, unitTeach $unit, CourseType $type, Unit $unit_executing)
    {
        $this->course = $course;
        $this->unit_executing = $unit_executing;
        $this->unit = $unit;
        $this->type = $type;
        $this->middleware('permission:course-list');
        $this->middleware('permission:course-create', ['only' => ['create','store']]);
        $this->middleware('permission:course-edit',   ['only' => ['edit','update']]);
        $this->middleware('permission:course-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (Auth()->user()->hasPermissionTo('dec'))
        {
            $courses = $this->course->all();

        }elseif (Auth()->user()->hasPermissionTo('caeap'))
        {
            $courses = $this->course->where('unit_teach_id','2')->get();

        }elseif (Auth()->user()->hasPermissionTo('deec'))
        {
            $courses = $this->course->where('unit_teach_id','3')->get();

        }elseif (Auth()->user()->hasPermissionTo('apmb')) 
        {            
            $courses = $this->course->where('unit_teach_id','1')->get();
        }
       
        
        return view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        if (Auth()->user()->hasPermissionTo('dec'))
        {
            $units = $this->unit->find([1,2,3]);            

        }elseif (Auth()->user()->hasPermissionTo('caeap'))
        {
            $units = $this->unit->find([2]);

        }elseif (Auth()->user()->hasPermissionTo('deec'))
        {
            $units = $this->unit->find([3]);     

        }elseif (Auth()->user()->hasPermissionTo('apmb')) 
        {
            $units = $this->unit->find([1]);
        }
        
        $types = $this->type->all();

        $units_executing = $this->unit_executing->all();        
        
        return view('admin.course.create-edit', compact('units', 'types', 'units_executing'));
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

        $this->validate($request, $this->course->rules, $this->course->messages);

        $insert = $this->course->create($dataForm);

        if ($insert) {
            flash('Curso criado com sucesso.')->success();
            return redirect()->route('course.index');
        }else {
            flash('Erro ao criar Curso.')->error();
            return redirect()->route('course.index');
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
        $course = $this->course->find($id);

        return view('admin.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = $this->course->find($id);        

        if (Auth()->user()->hasPermissionTo('dec'))
        {
            $units = $this->unit->find([1,2,3]);            

        }elseif (Auth()->user()->hasPermissionTo('caeap'))
        {
            $units = $this->unit->find([2]);

        }elseif (Auth()->user()->hasPermissionTo('deec'))
        {
            $units = $this->unit->find([3]);     

        }elseif (Auth()->user()->hasPermissionTo('apmb')) 
        {
            $units = $this->unit->find([1]);
        }

        $types = $this->type->all();

        $units_executing = $this->unit_executing->all();        

        return view('admin.course.create-edit', compact('types', 'course', 'units', 'units_executing'));
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

        $course = $this->course->find($id);        

        $update = $course->update($dataForm);
          
        if ($update){
            flash('Curso alterado com sucesso.')->success();
            return redirect()->route('course.index');  
        }else {
            flash('Erro ao alterar Curso.')->error();
            return redirect()->route('course.index');
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
        $course = $this->course->find($id);

        $delete = $course->delete();

       if($delete){
            flash('Curso deletado com sucesso.')->success();
            return redirect()->route('course.index');        
        }else {
            flash('Erro ao deletar Curso.')->error();
            return redirect()->route('course.create');
        }
    }
}
