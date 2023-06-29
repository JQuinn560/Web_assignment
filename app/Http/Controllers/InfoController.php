<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Http\Requests\StoreinfoRequest;
use App\Http\Requests\UpdateinfoRequest;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreinfoRequest $request)
    {
        $info = Info::create([
            'name' => $request->Name,
            'email' => $request->Email,
            'number' => $request->PhoneNumber,
            'start-date' => $request->StartDate,
            'end-date' => $request->EndDate,
            'min-number' => $request->NumberMin5,
            'max-number' => $request->NumberMax8,
            'whole-number' => $request->WholeNumber,
            'max-whole-number' => $request->MaxWhole,
            'number-range' => $request->NumRange,
            'instagram-url' => $request->Insta,
            'picture' => $request->picture,

        ]);

        return response($info);
    }

    /**
     * Display the specified resource.
     */
    public function show(info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateinfoRequest $request, info $info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(info $info)
    {
        //
    }
}
