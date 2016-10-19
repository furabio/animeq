<?php

namespace App\Http\Controllers;

use App\Anime;
use Illuminate\Http\Request;
use App\Http\Requests\AnimeRequest;
use App\Http\Requests;

class AnimesController extends Controller
{
    private $animes;

    public function __construct(Anime $animes)
    {
        $this->animes = $animes;
    }

    public function index()
    {
        $animes = $this->animes->all();

        return view('admin.index')->withAnimes($animes);
    }

    public function create()
    {
        return view('admin.animes.create');
    }

    public function edit($id)
    {

    }

    public function store(AnimeRequest $request)
    {
        return $request->all();
    }

    public function update(AnimeRequest $request, $id)
    {

    }

    public function delete($id)
    {

    }
}
