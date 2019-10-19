<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Filters\Filterable;

class Concert extends Model
{
    use Filterable;
}
