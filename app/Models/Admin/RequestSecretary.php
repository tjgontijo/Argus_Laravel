<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Admin\CourseRelease;
use App\User;

class RequestSecretary extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['id', 'user_id', 'course_release_id', 'name', 'description', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function course_release() 
	{
		return $this->belongsTo(CourseRelease::class);
	}
}
