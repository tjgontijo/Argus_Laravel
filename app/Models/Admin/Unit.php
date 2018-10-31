<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Ra;
use App\User;
use OwenIt\Auditing\Contracts\Auditable;

class Unit extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;
	protected $fillable = ['ra_id' , 'short_name', 'name', 'telephone', 'cellphone'];

	public $rules = [
		
		'short_name' 	=> 'required|max:20',
		'name' 			=> 'required|max:200',
		'telephone'		=> 'max:15',
		'cellphone'		=> 'max:15',
		'ra_id'			=> 'required'
		
	];

	public $messages = [
		
		'short_name.max' 		=> 'O Nome Curto da Unidade deverá conter no máximo 20 caracteres',		
		'short_name.required' 	=> 'O Nome Curto é de preenchimento obrigatório',
		'name.required' 		=> 'O Nome da Unidade é de preenchimento obrigatório',
		'name.max' 				=> 'O Nome Curto da Unidade deverá conter no máximo 200 caracteres',
		'ra_id.required'		=> 'A Região Administrativa é de preenchimento obrigatório'
		
	];

	public function ra() 
	{
		return $this->belongsTo(Ra::class);
	}

	public function user() 
	{
		return $this->hasMany(People::class);
	}
	public function course() 
	{
		return $this->hasMany(Course::class);
	}

	
}
