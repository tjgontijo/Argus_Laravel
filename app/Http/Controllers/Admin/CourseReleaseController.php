<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Course;
use App\Models\Admin\CourseRelease;
use App\Models\Admin\StatusRelease;
use App\Models\Admin\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CourseReleaseController extends Controller
{

    public function __construct(CourseRelease $course_release, StatusRelease $status_release, Course $course, Enroll $enroll)
    {
        $this->course_release = $course_release;
        $this->enroll = $enroll;
        $this->course = $course;
        $this->status_release = $status_release; 
        $this->middleware('permission:course_release-list');
        $this->middleware('permission:course_release-create', ['only' => ['create','store']]);
        $this->middleware('permission:course_release-edit',   ['only' => ['edit','update']]);
        $this->middleware('permission:course_release-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function enroll_user()
    {
        $user = auth()->user()->id;
        $course_releases = DB::table('course_releases')
                            ->join('enrolls', 'course_releases.id', '=', 'enrolls.course_release_id')
                            ->join('courses', 'course_releases.course_id', '=', 'courses.id')
                            ->join('unit_teaches', 'courses.unit_teach_id', '=', 'unit_teaches.id')
                            ->join('status_releases', 'course_releases.status_release_id', '=' , 'status_releases.id')
                            ->join('course_types','courses.course_type_id', '=' , 'course_types.id')
                            ->select('courses.name as nome_curso', 
                                    'courses.short_name as nome_curso_short',
                                    'course_releases.*', 
                                    'status_releases.name as status_name',
                                    'unit_teaches.short_name as unit_short_name',
                                    'unit_teaches.name as unit_name',
                                    'course_types.name as course_type_name',
                                    'courses.unit_teach_id as unidade_id',
                                    'course_types.type as course_type')         
                            ->where('enrolls.user_id', '=', $user)
                            ->get()->toArray();
                            //dd($course_releases);

        return view('admin.course_release.enroll-user', compact('course_releases'));

    }

    public function index()
    {

        if (Auth()->user()->hasPermissionTo('dec'))
        {
            $course_releases = DB::table('course_releases')
            ->join('courses', 'course_releases.course_id', '=', 'courses.id')            
            ->join('unit_teaches', 'courses.unit_teach_id', '=', 'unit_teaches.id')
            ->join('status_releases', 'course_releases.status_release_id', '=' , 'status_releases.id')
            ->join('course_types','courses.course_type_id', '=' , 'course_types.id')
            ->select('courses.name as nome_curso', 
                        'courses.short_name as nome_curso_short',
                        'course_releases.*', 
                        'status_releases.name as status_name',
                        'unit_teaches.short_name as unit_short_name',
                        'unit_teaches.name as unit_name',
                        'course_types.name as course_type_name',
                        'courses.unit_teach_id as unidade_id',
                        'course_types.type as course_type')            
            ->where('courses.unit_teach_id', '>', '0')
            ->orderBy('course_releases.id')
            ->get()->toArray();

        }elseif (Auth()->user()->hasPermissionTo('caeap'))
        {
            $course_releases = DB::table('course_releases')
            ->join('courses', 'course_releases.course_id', '=', 'courses.id')            
            ->join('unit_teaches', 'courses.unit_teach_id', '=', 'unit_teaches.id')
            ->join('status_releases', 'course_releases.status_release_id', '=' , 'status_releases.id')
            ->join('course_types','courses.course_type_id', '=' , 'course_types.id')
            ->select('courses.name as nome_curso', 
                        'courses.short_name as nome_curso_short',
                        'course_releases.*', 
                        'status_releases.name as status_name',
                        'unit_teaches.short_name as unit_short_name',
                        'unit_teaches.name as unit_name',
                        'course_types.name as course_type_name',
                        'courses.unit_teach_id as unidade_id',
                        'course_types.type as course_type')            
            ->where('courses.unit_teach_id', '=', '2')
            ->orderBy('course_releases.id')
            ->get()->toArray();
            

        }elseif (Auth()->user()->hasPermissionTo('deec'))
        {
            $course_releases = DB::table('course_releases')
            ->join('courses', 'course_releases.course_id', '=', 'courses.id')   
            ->join('unit_teaches', 'courses.unit_teach_id', '=', 'unit_teaches.id')
            ->join('status_releases', 'course_releases.status_release_id', '=' , 'status_releases.id')
            ->join('course_types','courses.course_type_id', '=' , 'course_types.id') 
            ->select('courses.name as nome_curso', 
                        'courses.short_name as nome_curso_short',
                        'course_releases.*', 
                        'status_releases.name as status_name',
                        'unit_teaches.short_name as unit_short_name',
                        'unit_teaches.name as unit_name',
                        'course_types.name as course_type_name',
                        'courses.unit_teach_id as unidade_id',
                        'course_types.type as course_type')                 
            ->where('courses.unit_teach_id', '=', '3')     
            ->orderBy('course_releases.id')       
            ->get()->toArray();

        }elseif (Auth()->user()->hasPermissionTo('apmb')) 
        {            
            $course_releases = DB::table('course_releases')
            ->join('courses', 'course_releases.course_id', '=', 'courses.id') 
            ->join('unit_teaches', 'courses.unit_teach_id', '=', 'unit_teaches.id')
            ->join('status_releases', 'course_releases.status_release_id', '=' , 'status_releases.id')
            ->join('course_types','courses.course_type_id', '=' , 'course_types.id') 
            ->select('courses.name as nome_curso', 
                        'courses.short_name as nome_curso_short',
                        'course_releases.*', 
                        'status_releases.name as status_name',
                        'unit_teaches.short_name as unit_short_name',
                        'unit_teaches.name as unit_name',
                        'course_types.name as course_type_name',
                        'courses.unit_teach_id as unidade_id',
                        'course_types.type as course_type')                   
            ->where('courses.unit_teach_id', '=', '1')
            ->get()->toArray();

           
        }
        //dd($course_releases);
        return view('admin.course_release.index', compact('course_releases'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status_releases = $this->status_release->all();

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
        $levels = ['Oficial', 'Praça', 'Misto'];
        return view('admin.course_release.create-edit', compact('courses', 'levels', 'status_releases'));
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
        $insert = $this->course_release->create($dataForm);
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . " criou a Publicação de Curso: " . $request->name;
        Log::notice($message);
        if ($insert) {
            flash('Publicação de Curso criada com sucesso.')->success();
            return redirect()->route('course_release.index');
        }else {
            flash('Erro ao criar Publicação de Curso.')->error();
            return redirect()->route('course_release.index');
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
        $course_release = $this->course_release->find($id);
        return view('admin.course_release.show', compact('course_release'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $status_releases = $this->status_release->all();
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
        $course_releases = $this->course_release->find($id);
        $levels = ['Oficial', 'Praça', 'Misto'];
        return view('admin.course_release.create-edit', compact('courses', 'levels', 'status_releases', 'course_releases'));
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
        $course_release = $this->course_release->find($id);        
        $update = $course_release->update($dataForm);
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", alterou a Publicação de Curso id: " . $id;
        Log::notice($message);        
        if ($update){
            flash('Publicação de Curso alterada com sucesso.')->success();
            return redirect()->route('course_release.index');  
        }else {
            flash('Erro ao alterar Publicação de Curso.')->error();
            return redirect()->route('course_release.index');
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
        $course_release = $this->course_release->find($id);
        $delete = $course_release->delete();
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", deletou a Publicação de Curso id: " . $id;
        Log::notice($message);        
        if ($delete){
            flash('Publicação de Curso deletada com sucesso.')->success();
            return redirect()->route('course_release.index');  
        }else {
            flash('Erro ao deletar Publicação de Curso.')->error();
            return redirect()->route('course_release.index');
        }

    }
}
