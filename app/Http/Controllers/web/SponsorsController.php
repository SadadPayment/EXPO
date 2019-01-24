<?php

namespace App\Http\Controllers\web;

use App\Models\Sponsors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sponsors = Sponsors::all();
        return view('Admin.Sponsors.index', compact('Sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Sponsors.create_edit');

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
        $Sponsors = new Sponsors($request->all());
        $Sponsors->image = $image;
        $Sponsors->save();
        return redirect()->route('Sponsors.index')
            ->with('success', 'Sponsors created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sponsors = Sponsors::findOrFail($id);
        return view('Admin.Sponsors.item', compact('Sponsors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Sponsors::findOrFail($id);
        return view('Admin.Sponsors.create_edit', compact('item'));
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
        $sponsors = Sponsors::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $this->saveImage($request);
            $request->request->add(['image' => $image]);
            $sponsors->update($request->all());
            $sponsors->image = $image;
            $sponsors->save();
            return redirect()->route('Sponsors.index')
                ->with('success', 'updated successfully');
        }
        $sponsors->update($request->all());
        return redirect()->route('Sponsors.index')
            ->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        Sponsors::destroy($id);
        return redirect()->route('Sponsors.index')
            ->with('field', 'Sponsors deleted successfully');
    }


    public function saveImage($image_file)
    {
        if ($image_file->hasfile('image')) {
            $image = $image_file->file('image');
            $name = str_random() . '_expo' . ".jpg";
            $image->move(public_path() . '/images/sponsors/' . '/', $name);
            return $name;
        }
        return false;
    }
}
