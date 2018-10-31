<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Unit;
use App\Models\Admin\Ra;
use Illuminate\Support\Facades\Log;

class UnitController extends Controller
{


    public function __construct(Unit $unit, Ra $ra) {
        $this->unit = $unit;
        $this->ra = $ra;
        $this->middleware('permission:unit-list');
        $this->middleware('permission:unit-show', ['only' => ['show']]);
        $this->middleware('permission:unit-create', ['only' => ['create','store']]);
        $this->middleware('permission:unit-edit',   ['only' => ['edit','update']]);
        $this->middleware('permission:unit-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = $this->unit->all();
        return view('admin.unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ras = $this->ra->all();
        return view('admin.unit.create-edit', compact('ras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $unitStore = new Unit;
        $this->validate($request, $this->unit->rules, $this->unit->messages);
        $unitStore->short_name = $request->short_name;
        $unitStore->name = $request->name;
        $unitStore->ra_id = $request->ra_id;
        $telephone = substr($request->telephone, 1, 2) . substr($request->telephone, 5, 4) . substr($request->telephone, 10, 4);
        $cellphone = substr($request->cellphone, 1, 2) . substr($request->cellphone, 5, 5) . substr($request->cellphone, 11, 4);
        $unitStore->telephone = $telephone;
        $unitStore->cellphone = $cellphone;
       
        $insert = $unitStore->save();

        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . " criou a Unidade: " . $request->name;
        Log::notice($message);
        if ($insert) {
            flash('Unidade criada com sucesso.')->success();
            return redirect()->route('unit.index');
        }else {
            flash('Erro ao criar Unidade.')->error();
            return redirect()->route('unit.create');
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

       $unit = $this->unit->find($id);

       return view('admin.unit.show', compact('unit'));

   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $unit = $this->unit->find($id);

        $ras = $this->ra->all();

        return view('admin.unit.create-edit', compact('unit', 'ras'));

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

        $unitStore = $this->unit->find($id);
        $this->validate($request, $this->unit->rules, $this->unit->messages);
        $unitStore->short_name = $request->short_name;
        $unitStore->name = $request->name;
        $unitStore->ra_id = $request->ra_id;
        $telephone = substr($request->telephone, 1, 2) . substr($request->telephone, 5, 4) . substr($request->telephone, 10, 4);
        $cellphone = substr($request->cellphone, 1, 2) . substr($request->cellphone, 5, 5) . substr($request->cellphone, 11, 4);
        $unitStore->telephone = $telephone;
        $unitStore->cellphone = $cellphone;
        $update = $unitStore->save();

        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", alterou Unidade id: " . $id . ", para: " . $request->name;
        Log::notice($message);        
        if ($update){
            flash('Unidade alterada com sucesso.')->success();
            return redirect()->route('unit.index');  
        }else {
            flash('Erro ao alterar Unidade.')->error();
            return redirect()->route('unit.create');
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
        
        $unit = $this->unit->find($id);
        
        $delete = $unit->delete();

        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . ", deletou a Unidade : " . $unit->short_name . " - " . $unit->name . ", id: " . $id;
        Log::notice($message);
        if($delete){
             flash('Unidade deletada com sucesso.')->success();
             return redirect()->route('unit.index');        
         }else {
             flash('Erro ao deletar Unidade.')->error();
             return redirect()->route('unit.create');
         }

    }
}
