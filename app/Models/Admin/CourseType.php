<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class CourseType extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = [ 'name' , 'description' , 'type' ];
}
