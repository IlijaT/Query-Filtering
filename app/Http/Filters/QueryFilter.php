<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


abstract class QueryFilter
{

  protected $request;
  protected $builder;

  public function __construct(Request $request)
  {
    $this->request = $request;
  }

  public function apply(Builder $builder)
  {

    $this->builder = $builder;
    foreach ($this->filters() as $name => $value) {
      if (!method_exists($this, $name)) {
        continue;
      }
      if (strlen($value)) {
        $this->$name($value);
      }
      // this only if you want to call function if query parameter does not have value for expm. ?city=
      // else {
      //   $this->$name();
      // }
    }
    return $this->builder;
  }

  public function filters()
  {
    return $this->request->all();
  }
}
