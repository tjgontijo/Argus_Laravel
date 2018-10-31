<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class AcademicSecretary extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
}
