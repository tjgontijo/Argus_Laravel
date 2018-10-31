<?php

namespace App\Models\Admin;
use App\Models\Admin\CourseReleaseAttachment;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Admin\RequestSecretary;

class CourseRelease extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $fillable = ['id', 'course_id', 'status_release_id', 'level', 'date_schedule_start', 'date_start', 'date_schedule_end', 'date_end', 'vacancies', 'vacancies_completed', 'duration', 'workload', 'requeriments', 'regime', 'observation', 'ata_abertura_curso'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function status_release()
    {
        return $this->belongsTo(StatusRelease::class);
    }

    //protected $dates = ['date_schedule_start','date_start', 'date_schedule_end', 'date_end'];

    public function course_release_attachment() 
    {
        return $this->hasMany(CourseReleaseAttachment::class);
    }

    public function request_secretary()
    {
        return $this->hasMany(RequestSecretary::class);
    }

    public function enrolls()
    {
        return $this->hasMany(Enroll::class);
    }

}



