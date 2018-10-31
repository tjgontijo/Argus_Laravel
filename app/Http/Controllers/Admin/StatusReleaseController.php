<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\StatusRelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StatusReleaseController extends Controller
{

    public function __construct(StatusRelease $status_release)
    {

        $this->status_release = $status_release;
        $this->middleware('permission:status_release-list');
        $this->middleware('permission:status_release-create', ['only' => ['create','store']]);
        $this->middleware('permission:status_release-edit',   ['only' => ['edit','update']]);
        $this->middleware('permission:status_release-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $status_releases = $this->status_release->all();
        
        return view('admin.status_release.index', compact('status_releases'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.status_release.create-edit');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data_form = $request->all();
        $insert = $this->status_release->create($data_form);
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . " criou o Status de Curso: " . $request->name;
        Log::notice($message);
        if ($insert) {
            flash('Status de Curso criado com sucesso.')->success();
            return redirect()->route('status_release.index');
        } else {
            flash('Erro ao criar Status de Curso.')->error();
            return redirect()->route('status_release.index');
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
        $status_release = $this->status_release->find($id);
        return view('admin.status_release.show', compact('status_release'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $status_release = $this->status_release->find($id);
        return view('admin.status_release.create-edit', compact('status_release'));
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
        $data_form = $request->all();
        $status_release = $this->status_release->find($id);
        $update = $status_release->update($data_form);
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", alterou o Status de Curso id: " . $id . ", para: " . $request->name;
        Log::notice($message);
        if ($update) {
            flash('Status de Curso alterado com sucesso.')->success();
            return redirect()->route('status_release.index');
        } else {
            flash('Erro ao alterar Status de Curso.')->error();
            return redirect()->route('status_release.index');
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
        $status_release = $this->status_release->find($id);
        $delete = $status_release->delete();
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", deletou o Status de Curso: " . $status_release->name . ", id: " . $id;
        Log::notice($message);
        if ($delete) {
            flash('Status de Curso deletado com sucesso.')->success();
            return redirect()->route('status_release.index');
        } else {
            flash('Erro ao deletar Status de Curso.')->error();
            return redirect()->route('status_release.index');
        }
    }

}
