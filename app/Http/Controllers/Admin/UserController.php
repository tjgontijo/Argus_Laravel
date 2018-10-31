<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Unit;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function __construct(User $user, Unit $unit)
    {

        $this->user = $user;
        $this->unit = $unit;
        $this->middleware('permission:user-list');
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    public function index()
    {

        $users = $this->user->all();

        return view('admin.user.index', compact('users'));
    }

    public function show($id)
    {

        $user = $this->user->find($id);

        return view('admin.user.show', compact('user'));
    }

    public function create()
    {

        $units = $this->unit->all();
        $grades = ['Soldado Segunda Classe', 'Soldado', 'Cabo', '3º Sargento', '2º Sargento', '1º Sargento', 'Subtenente', 'Cadete 1º Ano', 'Cadete 2º Ano',
            'Cadete 3º Ano', 'Aspirante', '2º Tenente', '1º Tenente', ' Capitão', 'Major', 'Tenente Coronel', 'Coronel', 'Chefe do Estado Maior',
            'Sub Comandante Geral', 'Comandante Geral', 'Chefe da Casa Militar', 'Outros'];       

        $roles = Role::pluck('name','name')->all();

        return view('admin.user.create', compact('units', 'grades', 'roles'));

    }
    public function store(Request $request)
    {
        $dataForm = $request->all();       
             
        $insert = $this->user->create($dataForm);
        $message = "O usuário: " . Auth()->user()->name . " id: " . Auth()->user()->id . " criou o Usuário: " . $request->username;
        Log::notice($message);
        if ($insert) {
            flash('Usuário criado com sucesso.')->success();
            return redirect()->route('user.index');
        }else {
            flash('Erro ao criar Usuário.')->error();
            return redirect()->route('user.create');
        }     
    }

    public function edit($id)
    {

        $user = $this->user->find($id);
        $units = $this->unit->all();
        $grades = ['Soldado Segunda Classe', 'Soldado', 'Cabo', '3º Sargento', '2º Sargento', '1º Sargento', 'Subtenente', 'Cadete 1º Ano', 'Cadete 2º Ano',
                    'Cadete 3º Ano', 'Aspirante', '2º Tenente', '1º Tenente', ' Capitão', 'Major', 'Tenente Coronel', 'Coronel', 'Chefe do Estado Maior',
                    'Sub Comandante Geral', 'Comandante Geral', 'Chefe da Casa Militar', 'Outros'];
        $userRole = $user->roles->pluck('name','name')->all();
        $roles = Role::pluck('name','name')->all();
        return view('admin.user.edit', compact('user', 'units', 'grades', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('user.index')
                        ->with('success','Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $user = $this->user->find($id);

        $delete = $user->delete();

        return redirect()->route('user.index')
                        ->with('success','Usuário deletado com sucesso!');
    }
}
