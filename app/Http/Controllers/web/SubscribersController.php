<?php

namespace App\Http\Controllers\web;

use App\Models\Subscribers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Subscribers = Subscribers::all();
        return view('Admin.Subscribers.index', compact('Subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Subscribers.edit');
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
        $Subscribers = new Subscribers($request->all());
        $Subscribers->image = $image;
        $Subscribers->save();
        return redirect()->route('Subscribers.index')
            ->with('success', 'Subscribers created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Subscribers::findOrFail($id);
        return view('Admin.Subscribers.edit', compact('item'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function saveImage($image_file)
    {
        if ($image_file->hasfile('image')) {
            $image = $image_file->file('image');
            $name = str_random() . '_expo' . ".jpg";
            $image->move(public_path() . '/images/Subscribers' . '/', $name);
            return $name;
        }
        return false;
    }
}
