<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Setting::first();
//        if ($item) {
        return view('Admin.Setting.index', compact('item'));
//        }
//        return redirect()->back();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Setting.edit');
//        echo "ff";
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
        $Setting = new Setting($request->all());
        $Setting->image = $image;
        $Setting->save();
        return redirect()->route('WebSetting.index')
            ->with('success', 'Setting created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Setting::findOrFail($id);
        return view('Admin.Setting.item', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Setting::findOrFail($id);
        return view('Admin.Setting.edit', compact('item'));
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
        $Setting = Setting::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $this->saveImage($request);
            $request->request->add(['image' => $image]);
            $Setting->update($request->all());
            $Setting->image = $image;
            $Setting->save();
            return redirect()->route('WebSetting.index')
                ->with('success', 'updated successfully');
        }
        $Setting->update($request->all());
        return redirect()->route('WebSetting.index')
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
        Setting::destroy($id);
        return redirect()->route('WebSetting.index')
            ->with('field', 'Setting Deleted successfully.');
    }

    public function saveImage($image_file)
    {
        if ($image_file->hasfile('image')) {
            $image = $image_file->file('image');
            $name = str_random() . '_expo' . ".jpg";
            $image->move(public_path() . '/images/Setting' . '/', $name);
            return $name;
        }
        return false;
    }
}
