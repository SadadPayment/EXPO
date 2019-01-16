<?php

namespace App\Http\Controllers\web;

use App\Models\ComingExpo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComingExpoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ComingExpo = ComingExpo::all();
        return view('Admin.ComingExpo.index', compact('ComingExpo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.ComingExpo.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $this->saveFile($request);
        $request->request->add(['file_upload' => $file]);
        $ComingExpo = new ComingExpo($request->all());
        $ComingExpo->file_upload = $file;
        $ComingExpo->save();
        return redirect()->route('ComingExpo.index')
            ->with('success', 'Coming Expo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ComingExpo = ComingExpo::findOrFail($id);
        return view('Admin.Coming Expo.item', compact('ComingExpo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = ComingExpo::findOrFail($id);
        return view('Admin.ComingExpo.edit', compact('item'));
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
        $file = $this->saveFile($request);
        $request->request->add(['file_upload' => $file]);
        $ComingExpo = ComingExpo::where('id', $id)->update([$request->all()]);

        return redirect()->route('ComingExpo.index')
            ->with('success', 'Coming Expo Updated successfully.');
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
        ComingExpo::destroy($id);
        return redirect()->route('ComingExpo.index')
            ->with('field', 'Coming Expo deleted successfully');
    }


    public function saveFile($request)
    {
        if ($request->hasfile('file_upload')) {
            $image = $request->file('file_upload');
            $name = $request->file_upload->getClientOriginalName();
            $image->move(public_path() . '/files/coming/' . '/', $name);
            return $name;
        }
        return false;
    }
}