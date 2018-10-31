<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Ra;
use Illuminate\Support\Facades\Log;

class RaController extends Controller
{
    public function __construct(Ra $ra) {
        $this->ra = $ra;
        $this->middleware('permission:ra-list');
        $this->middleware('permission:ra-show',   ['only' => ['show']]);
        $this->middleware('permission:ra-create', ['only' => ['create','store']]);
        $this->middleware('permission:ra-edit',   ['only' => ['edit','update']]);
        $this->middleware('permission:ra-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ras = $this->ra->all();        
        return view('admin.ra.index', compact('ras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ra.create-edit');
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
        $this->validate($request, $this->ra->rules, $this->ra->messages);        
        $insert = $this->ra->create($dataForm);
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . " criou a Região Administrativa: " . $request->name;
        Log::notice($message);
        if ($insert) {
            flash('Região Administrativa criada com sucesso.')->success();
            return redirect()->route('ra.index');
        }else {
            flash('Erro ao criar Região Administrativa.')->error();
            return redirect()->route('ra.create');
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
       $ra = $this->ra->find($id);
       return view('admin.ra.show', compact('ra'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ra = $this->ra->find($id);
        return view('admin.ra.create-edit', compact('ra'));
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
        $this->validate($request, $this->ra->rules, $this->ra->messages);
        $ra = $this->ra->find($id);        
        $update = $ra->update($dataForm);
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", alterou Região Administrativa id: " . $id . ", para: " . $request->name;
        Log::notice($message);        
        if ($update){
            flash('Região Administrativa alterada com sucesso.')->success();
            return redirect()->route('ra.index');  
        }else {
            flash('Erro ao alterar Região Administrativa.')->error();
            return redirect()->route('ra.create');
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
       $ra = $this->ra->find($id);
       $delete = $ra->delete();
       $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", deletou a Região Administrativa : " . $ra->name . ", id: " . $id;
       Log::notice($message);
       if($delete){
            flash('A Região Administrativa '. $ra->name .' foi deletada com sucesso.')->success();
            return redirect()->route('ra.index');        
        }else {
            flash('Erro ao deletar Região Administrativa.')->error();
            return redirect()->route('ra.create');
        }
    }
}