<?php

namespace App\Http\Controllers\web;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $News = News::all();
        return view('Admin.News.index', compact('News'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.News.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $this->saveImage($request);
        $request->request->add(['image' => $image]);
        $news = new News($request->all());
        $news->image = $image;
        $news->save();
        return redirect()->route('News.index')
            ->with('success', 'news created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('Admin.News.item', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = News::findOrFail($id);
        return view('Admin.News.create_edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $this->saveImage($request);
            $request->request->add(['image' => $image]);
            $news->update($request->all());
            $news->image = $image;
            $news->save();
            return redirect()->route('News.index')
                ->with('success', 'updated successfully');
        }
        $news->update($request->all());
        return redirect()->route('News.index')
            ->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        return redirect()->route('News.index')
            ->with('field', 'News Deleted successfully.');
    }

    public function saveImage($image_file)
    {
        if ($image_file->hasfile('image')) {
            $image = $image_file->file('image');
            $name = str_random() . '_expo' . ".jpg";
            $image->move(public_path() . '/images/News' . '/', $name);
            return $name;
        }
        return false;
    }
}
