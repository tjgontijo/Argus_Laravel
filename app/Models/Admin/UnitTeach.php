<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class UnitTeach extends Model implements Auditable
{

	use \OwenIt\Auditing\Auditable;
    protected $fillable = ['short_name', 'name'];

	public $rules = [
		
		'short_name' 	=> 'required|max:20',
		'name' 			=> 'required|max:200',
		
	];

	public $messages = [
		
		'short_name.max' 		=> 'O Nome Curto da Unidade de Ensino deverá conter no máximo 20 caracteres',		
		'short_name.required' 	=> 'O Nome Curto da Unidade de Ensino é de preenchimento obrigatório',
		'name.required' 		=> 'O Nome da Unidade de Ensino é de preenchimento obrigatório',
		'name.max' 				=> 'O Nome Curto da Unidade de Ensino deverá conter no máximo 200 caracteres',
		
		
	];

}
