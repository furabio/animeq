<?php

namespace App\Http\Controllers;

use App\Anime;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\AnimeRequest;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

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
        $categories = Category::pluck('name', 'id');

        return view('admin.animes.create')->withCategories($categories);
    }

    public function edit($id)
    {

    }

    public function store(AnimeRequest $requests)
    {
        $image = $requests->file('image');
        $filaname = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images/animes/' . $filaname);

        Image::make($image->getRealPath())->resize(280, 400)->save($path);

        $this->animes->create([
            'name' => $requests->name,
            'category_id' => $requests->category,
            'sinopse' => $requests->sinopse,
            'genre' => $requests->genre,
            'image' => $filaname,
            'director' => $requests->director,
            'studio' => $requests->studio,
            'release' => $requests->release,
            'status' => $requests->status,
            'year' => $requests->year
        ]);

        Session::flash('success', "O anime " . $requests->name . " foi  criado com sucesso!");

        return redirect()->route('animes.index');
    }

    public function update(AnimeRequest $requests, $id)
    {

    }

    public function delete($id)
    {

    }
}
