<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Ra extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;
	protected $fillable = [ 'name' , 'local' ];

	public $rules = [

		'name' => 'required|max:10',
		'local' => 'required|max:90',

	];

	public $messages = [

		'name.required' => 'O Nome da Região Administrativa é de preenchimento obrigatório.',
		'local.required' => 'O Local da Região Administrativa é de preenchimento obrigatório.',		
		'name.max' => 'O Nome da Região Administrativa deverá conter no máximo 10 caracteres.',
		'local.max' => 'O Local da Região Administrativa deverá conter no máximo 90 caracteres.',

	];

}
