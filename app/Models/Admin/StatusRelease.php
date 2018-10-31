<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class StatusRelease extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = ['id', 'name'];

    public function courseReleases() {
        return $this->hasMany(CourseRelease::class);
    }
}
