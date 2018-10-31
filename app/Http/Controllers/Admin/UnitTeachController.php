<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\UnitTeach;
use Illuminate\Support\Facades\Log;

class UnitTeachController extends Controller
{
    public function __construct(UnitTeach $unitteach) {
        $this->unitteach = $unitteach;
        $this->middleware('permission:unit_teach-list');
        $this->middleware('permission:unit_teach-show',   ['only' => ['show']]);
        $this->middleware('permission:unit_teach-create', ['only' => ['create','store']]);
        $this->middleware('permission:unit_teach-edit',   ['only' => ['edit','update']]);
        $this->middleware('permission:unit_teach-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unitteachs = $this->unitteach->all();
        return view('admin.unit_teach.index', compact('unitteachs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        return view('admin.unit_teach.create-edit');
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
        $this->validate($request, $this->unitteach->rules, $this->unitteach->messages);
        $insert = $this->unitteach->create($dataForm);
        
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . " criou a Unidade de Ensino: " . $request->name;
        Log::notice($message);
        if ($insert) {
            flash('Unidade de Ensino criada com sucesso.')->success();
            return redirect()->route('unitteach.index');
        }else {
            flash('Erro ao criar Unidade de Ensino.')->error();
            return redirect()->route('unitteach.create');
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
       $unitteach = $this->unitteach->find($id);
       return view('admin.unit_teach.show', compact('unitteach'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unitteach = $this->unitteach->find($id);
        return view('admin.unit_teach.create-edit', compact('unitteach'));
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
        $this->validate($request, $this->unitteach->rules, $this->unitteach->messages);
        $unitteach_update = $this->unitteach->find($id);        
        $update = $unitteach_update->update($dataForm);

        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", alterou Unidade id: " . $unitteach_update->name . ", para: " . $request->name;
        Log::notice($message);        
        if ($update){
            flash('Unidade de Ensino alterada com sucesso.')->success();
            return redirect()->route('unitteach.index');  
        }else {
            flash('Erro ao alterar Unidade de Ensino.')->error();
            return redirect()->route('unitteach.create');
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
        
        $unitteach = $this->unitteach->find($id);
        
        $delete = $unitteach->delete();

        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", deletou a Unidade de Ensino: " . $unitteach->short_name . " - " . $unitteach->name . ", id: " . $id;
        Log::notice($message);
        if($delete){
             flash('Unidade de Ensino deletada com sucesso.')->success();
             return redirect()->route('unitteach.index');        
         }else {
             flash('Erro ao deletar Unidade de Ensino.')->error();
             return redirect()->route('unitteach.create');
         }

    }
}
