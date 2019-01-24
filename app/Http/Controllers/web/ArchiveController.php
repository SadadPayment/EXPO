<?php

namespace App\Http\Controllers\web;

use App\Models\Archive;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Archive = Archive::all();
        return view('Admin.Archive.index', compact('Archive'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Archive.edit');
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
        $archive = new Archive($request->all());
        $archive->file_upload = $file;
        $archive->save();
        return redirect()->route('Archive.index')
            ->with('success', 'Archive created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $archive = Archive::findOrFail($id);
        return view('Admin.Archive.item', compact('archive'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Archive::findOrFail($id);
        return view('Admin.Archive.edit', compact('item'));
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
        $archive = Archive::findOrFail($id);
        if ($request->hasFile('file_upload')) {
            $file = $this->saveFile($request);
            $request->request->add(['file_upload' => $file]);
            $archive->update($request->all());
            $archive->file_upload = $file;
            $archive->save();
            return redirect()->route('Archive.index')
                ->with('success', 'updated successfully');
        }
        $archive->update($request->all());
        return redirect()->route('Archive.index')
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
        Archive::destroy($id);
        return redirect()->route('Archive.index')
            ->with('field', 'Archive deleted successfully');
    }


    public function saveFile($request)
    {
        if ($request->hasfile('file_upload')) {
            $image = $request->file('file_upload');
            $name = $request->file_upload->getClientOriginalName();
            $image->move(public_path() . '/files/archive/' . '/', $name);
            return $name;
        }
        return false;
    }
}
