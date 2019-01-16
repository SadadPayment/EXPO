<?php

namespace App\Http\Controllers\web;

use App\Models\CategoryExposition;
use App\Models\Exposition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return data;
     */
    public function index()
    {
        $cats = CategoryExposition::all();
        $Exposition = Exposition::all();
        return view('Admin.Exposition.index', compact(['cats', 'Exposition']));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view  with cat
     */
    public function create()
    {
        $cats = CategoryExposition::all();
        return view('Admin.Exposition.create_edit', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return  true
     */
    public function store(Request $request)
    {
        $image = $this->saveImage($request);
        $request->request->add(['image' => $image]);
        $data = Exposition::create($request->all());
        return redirect()->route('Exposition.index')
            ->with('success', 'Exposition created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return view by id
     */
    public function show($id)
    {
        $data = Exposition::findOrFail($id);
        return view("Admin.Exposition.exposition", compact($data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View $item
     */
    public function edit($id)
    {
        $cats = CategoryExposition::all();
        $item = Exposition::findOrFail($id);
        return view('Admin.Exposition.create_edit', compact(['item', 'cats']));
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
        $image = $this->saveImage($request);
//        $file = $request->request->(['image' => $image]);
        $exposition = Exposition::findOrFail($id);
        $exposition->update($request->all());
        return redirect()->route('exposition.index')
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
        Exposition::destroy($id);
        return redirect()->route('exposition.index')
            ->with('field', 'Exposition deleted successfully');

    }

    public function saveImage($image_file)
    {
        if ($image_file->hasfile('image')) {
            $image = $image_file->file('image');
            $name = str_random() . '_expo' . ".jpg";
            $image->move(public_path() . '/images/Exposition' . '/', $name);
            return $name;
        }
        return false;
    }
}
