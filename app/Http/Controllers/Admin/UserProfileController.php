<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Admin\Unit;

class UserProfileController extends Controller
{

    public function __construct(User $user, Unit $unit)
    {
      $this->user = $user;   
      $this->unit = $unit;   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth()->user()->id;
        $user = $this->user->find($user_id);        
        return view('admin.user_profile.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $user = $this->user->find($id); 
        $units = $this->unit->all();
        $grades = [
                ''                       => '',
                'Soldado Segunda Classe' => 'Soldado Segunda Classe', 
                'Soldado'                => 'Soldado', 
                'Cabo'                   => 'Cabo', 
                '3º Sargento'            => '3º Sargento', 
                '2º Sargento'            => '2º Sargento', 
                '1º Sargento'            => '1º Sargento', 
                'Subtenente'             => 'Subtenente', 
                'Cadete 1º Ano'          => 'Cadete 1º Ano', 
                'Cadete 2º Ano'          => 'Cadete 2º Ano',                
                'Cadete 3º Ano'          => 'Cadete 3º Ano',
                'Aspirante'              => 'Aspirante', 
                '2º Tenente'             => '2º Tenente',
                '1º Tenente'             => '1º Tenente', 
                'Capitão'               => 'Capitão', 
                'Major'                  => 'Major', 
                'Tenente Coronel'        => 'Tenente Coronel',
                'Coronel'                => 'Coronel', 
                'Chefe do Estado Maior'  => 'Chefe do Estado Maior',
                'Sub Comandante Geral'   => 'Sub Comandante Geral',
                'Comandante Geral'       => 'Comandante Geral',
                'Chefe da Casa Militar'  => 'Chefe da Casa Militar', 
                'Civil'                  => 'Civil', 
                'Contratado'             => 'Contratado', 
                'Outros'                 => 'Outros'
            ];       
        return view('admin.user_profile.edit', compact('user', 'grades', 'units'));
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
        $user_id = Auth()->user()->id;
        $input = $request->all();        
        $user = $this->user->find($user_id);
        $user->update($input); 

        return redirect()->route('user_profile.index')
                        ->with('success','Perfil atualizado com sucesso!');
    }   
}
