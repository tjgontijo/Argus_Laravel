<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\StatusEnroll;
use App\Models\Admin\CourseRelease;
use App\Models\Admin\FunctionEnroll;
use App\User;
use OwenIt\Auditing\Contracts\Auditable;

class Enroll extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = [ 'user_id' , 'course_release_id' , 'function_enroll_id' , 'status_enroll_id' ];



    public function status_enroll() {
        return $this->belongsTo(StatusEnroll::class);
    }
    public function course_release() {
        return $this->belongsTo(CourseRelease::class);
    }
    public function function_enroll() {
        return $this->belongsTo(FunctionEnroll::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}

