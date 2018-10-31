<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\CourseType;
use Illuminate\Support\Facades\Log;

class CourseTypeController extends Controller
{

    public function __construct(CourseType $course_type){

        $this->course_type = $course_type;
        $this->middleware('permission:course_type-list');
        $this->middleware('permission:course_type-create', ['only' => ['create','store']]);
        $this->middleware('permission:course_type-edit',   ['only' => ['edit','update']]);
        $this->middleware('permission:course_type-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $course_types = $this->course_type->all();

        return view('admin.course_type.index' , compact('course_types'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types =  ['PMDF', 'Outros Órgãos'];       

        return view('admin.course_type.create-edit' , compact('types'));
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
        //$this->validate($request, $this->course_type->rules, $this->course_type->messages);
        $insert = $this->course_type->create($dataForm);
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . " criou o Tipo de Curso: " . $request->name;
        Log::notice($message);
        if ($insert) {
            flash('Tipo de Curso criado com sucesso.')->success();
            return redirect()->route('course_type.index');
        }else {
            flash('Erro ao criar Tipo de Curso.')->error();
            return redirect()->route('course_type.create');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)    {

        $course_type = $this->course_type->find($id);
        return view('admin.course_type.show', compact('course_type'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

     $course_type = $this->course_type->find($id);

     $types =  ['PMDF', 'Outros Órgãos'];

     return view('admin.course_type.create-edit', compact('course_type', 'types'));

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

        //$this->validate($request, $this->course_type->rules, $this->course_type->messages);

        $course_type = $this->course_type->find($id);

        $update = $course_type->update($dataForm);

        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", alterou o Tipo de Curso id: " . $id . ", para: " . $request->name;
        Log::notice($message);        
        if ($update){
            flash('Tipo de Curso alterado com sucesso.')->success();
            return redirect()->route('course_type.index');  
        }else {
            flash('Erro ao alterar Tipo de Curso.')->error();
            return redirect()->route('course_type.create');
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
        $course_type = $this->course_type->find($id);
        
        $delete = $course_type->delete();
        
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", deletou o Tipo de Curso: " . $course_type->name . ", id: " . $id;
        Log::notice($message);
        if($delete){
             flash('Tipo de Curso deletado com sucesso.')->success();
             return redirect()->route('course_type.index');        
         }else {
             flash('Erro ao deletar Tipo de Curso.')->error();
             return redirect()->route('course_type.create');
         }
    }
}
