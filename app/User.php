<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin\Unit;
use App\Models\Admin\RequestSecretary;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array     */
 

    protected $fillable = ['unit_id', 
                            'name',
                            'email',
                            'username',
                            'gender',
                            'naturalness',
                            'breed',
                            'grade',
                            'date_admission',
                            'date_birth',
                            'registration',
                            'cpf',
                            'rg',
                            'cellphone',
                            'phone',
                            'email2',
                            'cep',
                            'address',
                            'complement',
                            'number',
                            'district',
                            'city',
                            'state'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function request_secretary() 
    {
		return $this->belongsTo(RequestSecretary::class);
	}
   
}
