<?php

namespace App\Http\Controllers;

use App\Concert;
use Illuminate\Http\Request;
use App\Http\Filters\ConcertFilters;

class ConcertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ConcertFilters $filters)
    {
        $concerts = Concert::filter($filters)->get();
        return view('concerts.index', compact('concerts'));
    }
}
