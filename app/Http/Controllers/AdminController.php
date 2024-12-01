<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = Information::all();
        return view('dashboard',compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('me.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInformationRequest $request)
    {
        $infos = new Information();
        $infos->name = $request->name;
        $infos->job = $request->job;
        $infos->birthday = $request->birthday;
        $infos->address = $request->address;
        $infos->email = $request->email;
        $infos->phone = $request->phone;
        $infos->fb = $request->fb;
        $infos->ig = $request->ig;
        $infos->linkedin = $request->linkedin;
        $infos->abt_me = $request->abt_me;
        $infos->save();
        return redirect()->back();



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
  

 
}
