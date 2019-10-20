<?php

namespace App\Http\Filters;


class ConcertFilters extends QueryFilter
{
  public function band($band)
  {
    return $this->builder->where('title', 'like', "%{$band}%");
  }

  public function city($city)
  {
    return $this->builder->where('city', 'like', "%{$city}%");
  }
}
