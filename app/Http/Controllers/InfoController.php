<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Http\Requests\StoreinfoRequest;
use App\Http\Requests\UpdateinfoRequest;
use Illuminate\Support\Facades\Auth;
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = Info::where('user_id',auth()->id())->first();
        // dd($infos);
        return view('index', compact('info'));
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
        $validatedData = $request->validated();

        if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->store('images', 'public');
        } else {
            $imagePath = null;
        }

         $info = Info::create([
        'Name' => $request->name,
        'Email' => $request->email,
        'PhoneNumber' => $request->phone,
        'StartDate' => $request->start,
        'EndDate' => $request->enddate,
        'NumberMin5' => $request->minnumber,
        'NumberMax8' => $request->maxnumber,
        'WholeNumber' => $request->wholenumber,
        'MaxWhole' => $request->maxwholenumber,
        'NumRange' => $request->numberrange,
        'Insta' => $request->instagramurl,
        'picture' => $imagePath,
        'user_id' => auth()->id(),
    ]);

        return view('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(info $info)
    {
        return view('show',  compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(info $info)
    {
        return view('edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateinfoRequest $request, info $info)
    {
        $validatedData = $request->validated();

        $info->update($validatedData);
        return redirect(route('info.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(info $info)
    {
        //
    }
}