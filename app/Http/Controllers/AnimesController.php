<?php

namespace App\Http\Controllers;

use App\Anime;
use App\Category;
use App\Http\Requests\AnimesRequest;
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
        $anime = $this->animes->findOrFail($id);
        $categories = Category::pluck('name', 'id');

        return view('admin.animes.edit')->withAnime($anime)->withCategories($categories);
    }

    public function store(AnimesRequest $request)
    {
        $image = $request->file('image');
        $filaname = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images/animes/' . $filaname);

        Image::make($image->getRealPath())->resize(280, 400)->save($path);

        $data = $request->all();
        $data['category_id'] = $request->category;
        $data['image'] = $filaname;

        $this->animes->create($data);

        Session::flash('success', "O anime " . $request->name . " foi  criado com sucesso!");

        return redirect()->route('animes.index');
    }

    public function update(AnimesRequest $request, $id)
    {
        if ($request->image)
        {
            $image = $request->image;
            $filaname = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/animes/' . $filaname);

            Image::make($image->getRealPath())->resize(280, 400)->save($path);
        }

        $data = $request->all();
        $data['image'] = $filaname;

        $this->animes->findOrFail($id)->update($data);

        return redirect()->route('animes.index');
    }

    public function delete($id)
    {

    }
}
