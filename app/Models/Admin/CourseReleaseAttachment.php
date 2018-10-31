<?php

namespace App\Models\Admin;
use App\Models\Admin\CourseRelease;
use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Model;

class CourseReleaseAttachment extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public $fillable =['id', 'course_releases_id', 'name', ];



    public function course_release()
    {
        return $this->belongsTo(CourseRelease::class);
    }
    
}
