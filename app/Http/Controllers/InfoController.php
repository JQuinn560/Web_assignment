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
            'Name' => $request->name,
            'Email' => $request->email,
            'PhoneNumber' => $request->phone,
            'StartDate' => $request->start,
            'EndDate' => $request->enddate,
            'NumberMin5' => $request->NumberMin5,
            'NumberMax8' => $request->NumberMax8,
            'WholeNumber' => $request->WholeNumber,
            'MaxWhole' => $request->MaxWhole,
            'NumRange' => $request->NumRange,
            'Insta' => $request->Insta,
            'picture'=> $request->picture,
            'user_id' => auth()->id(),

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
