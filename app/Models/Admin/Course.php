<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Course extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = ['id', 'short_name', 'name', 'description', 'unit_teach_id', 'unit_executing_id', 'course_type_id'];
    
    public $rules = [
        'short_name' => 'required|min:2|max:8',
        'name' => 'required|max:150',
        'description' => 'required',
        'unit_teach_id' => 'required',
        'unit_executing_id' => 'required',
        'course_type_id' => 'required',
    ];
    
    public $messages = [
        'short_name.min' => 'O nome curto deverá conter no minimo 2 caracteres',
        'short_name.max' => 'O nome curto deverá conter no máximo 8 caracteres',
        'short_name.required' => 'O nome curto é obrigatorio',
        'name.required' => 'O nome é obrigatorio',
        'description.required' => 'A descrição do curso é obrigatoria',
        'unit_teach_id.required' => 'A unidade de ensino é obrigatoria',
    ];

    public function unitTeach() {
        return $this->belongsTo(UnitTeach::class);
    }
    public function unitExecuting() {
        return $this->belongsTo(Unit::class);
    }

    public function courseType() {
        return $this->belongsTo(CourseType::class);
    }

    public function courseReleases() 
    {
        return $this->hasMany(CourseRelease::class);
    }
}
