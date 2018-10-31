<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class StatusEnroll extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
}
