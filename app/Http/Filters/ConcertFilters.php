<?php

namespace App\Http\Filters;


class ConcertFilters extends QueryFilter
{
  public function band($band)
  {
    return $this->builder->where('title', $band);
  }

  public function city($city)
  {
    return $this->builder->where('city', $city);
  }
}
