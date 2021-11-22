<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DashboardOutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.outlets.index', [
            'title' => "Outlets Dashboard",
            'outlets' => Outlet::filter(request(['search']))->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.outlets.create', [
            'title' => "Create Outlet",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:outlets',
            'address' => 'required',
            'map' => 'required'
        ]);

        Outlet::create($validatedData);

        return redirect('/dashboard/outlets')->with('success', 'New Outlet has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Outlet $outlet)
    {
        //
        return view('dashboard.outlets.edit', [
            'title' => "Edit Outlet",
            "outlet" => $outlet,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet)
    {
        //
        $rules = [
            'name' => 'required|max:255',
            'address' => 'required',
            'map' => 'required'
        ];

        if($request->slug != $outlet->slug) {
            $rules['slug'] = 'required|unique:outlets';
        }

        $validatedData = $request->validate($rules);

        Outlet::where('id', $outlet->id)
                ->update($validatedData);

        return redirect('/dashboard/outlets')->with('success', 'Outlet has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outlet $outlet)
    {
        //
        Outlet::destroy($outlet->id);

        return redirect('/dashboard/outlets')->with('success', 'Outlet has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Outlet::class, 'slug', $request->name);

        return response()->json(['slug' => $slug]);
    }
}
