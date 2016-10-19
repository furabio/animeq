<?php

namespace App\Http\Controllers;

use App\Episode;
use Illuminate\Http\Request;

use App\Http\Requests;

class EpisodesController extends Controller
{
    private $episodes;

    public function __construct(Episode $episodes)
    {
        $this->episodes = $episodes;
    }

    public function index()
    {

    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
