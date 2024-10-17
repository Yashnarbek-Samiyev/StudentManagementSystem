<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Batch;




class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $batches=Batch::all();
        return view('batches.index')->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        $courses=Course::pluck('name','id');
        return view('batches.create', compact('courses'));


        // return view('batches.create')
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('/batches')->with('flash_message', 'Batch created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $batches = Batch::findOrFail($id);
        return view('batches.show')->with('batches', $batches);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $batches = Batch::findOrFail($id);
        return view('batches.edit')->with('batches', $batches);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $batches = Batch::findOrFail($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('/batches')->with('flash_message', 'Batch updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $batches = Batch::findOrFail($id);
        $batches->delete();
        return redirect('/batches')->with('flash_message', 'Batch deleted');

    }
}
