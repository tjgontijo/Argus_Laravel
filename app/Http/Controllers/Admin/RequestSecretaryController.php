<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\RequestSecretary;
use Illuminate\Http\Request;
use App\Models\Admin\Enroll;

class RequestSecretaryController extends Controller
{

    public function __construct(RequestSecretary $request_secretary,
                                Enroll $enroll)
    {
        $this->request_secretary = $request_secretary;
        $this->enroll = $enroll;
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
        
        return view('admin.request_secretaries.index', compact('request_secretaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user()->id;
        $enrolls_active = $this->enroll->where('user_id', '=', $user)
                                ->where('status_enroll_id', '=', 2)
                                ->get();         
        return view('admin.request_secretaries.create-edit', compact('enrolls_active'));
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
        $insert = $this->request_secretary->create($dataForm);
        if ($insert) {
            flash('Solicitação criada com sucesso.')->success();
            return redirect()->route('request_secretaries.index');
        }else {
            flash('Erro ao criar Solicitação.')->error();
            return redirect()->route('request_secretaries.create');
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
        $request_secretary = $this->request_secretary->find($id);
        return view('admin.request_secretaries.show', compact('request_secretary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = auth()->user()->id;
        $request_secretaries = $this->request_secretary->find($id);
        $enrolls_active = $this->enroll->where('user_id', '=', $user)
                                ->where('status_enroll_id', '=', 2)
                                ->get(); 
        return view('admin.request_secretaries.create-edit', compact('request_secretaries','enrolls_active'));
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
        $request_secretary = $this->request_secretary->find($id);
        $update = $request_secretary->update($dataForm);
        if ($update) {
            flash('Solicitação atualizada com sucesso.')->success();
            return redirect()->route('request_secretaries.index');
        }else {
            flash('Erro ao atualizar Solicitação.')->error();
            return redirect()->route('request_secretaries.create');
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
        $request_secretary = $this->request_secretary->find($id);
        $delete = $request_secretary->delete();
        if ($delete) {
            flash('Solicitação deletada com sucesso.')->success();
            return redirect()->route('request_secretaries.index');
        }else {
            flash('Erro ao deletar Solicitação.')->error();
            return redirect()->route('request_secretaries.create');
        }
    }
}
