<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class StudentArea extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
}
