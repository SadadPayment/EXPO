<?php

namespace App\Http\Controllers\web;

use App\Models\ExpoMap;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpoMapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eMap = ExpoMap::all();
        return view('Admin.maps.index', compact('eMap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.maps.edit');
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
        $eMap = new ExpoMap($request->all());
        $eMap->image = $image;
        $eMap->save();
        if ($request->is_notification == 1) {
            $this->send_notification($request->Title_ar, $request->topic_ar);
            return redirect()->route('Maps.index')
                ->with('success', 'Map created successfully.');
        }
        return redirect()->route('Maps.index')
            ->with('success', 'Maps created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eMap = ExpoMap::findOrFail($id);
        return view('Admin.maps.edit', compact('eMap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = ExpoMap::findOrFail($id);
        return view('Admin.maps.edit', compact('item'));
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
        $eMap = ExpoMap::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $this->saveImage($request);
            $request->request->add(['image' => $image]);
            $eMap->update($request->all());
            $eMap->image = $image;
            $eMap->save();
            return redirect()->route('Maps.index')
                ->with('success', 'updated successfully');
        }
        $eMap->update($request->all());
        return redirect()->route('Maps.index')
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
        ExpoMap::destroy($id);
        return redirect()->route('Maps.index')
            ->with('field', 'Map Deleted successfully.');
    }

    public function saveImage($image_file)
    {
        if ($image_file->hasfile('image')) {
            $image = $image_file->file('image');
            $name = str_random() . '_expo' . ".jpg";
            $image->move(public_path() . '/images/maps' . '/', $name);
            return $name;
        }
        return false;
    }
}
