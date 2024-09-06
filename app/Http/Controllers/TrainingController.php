<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function CreateIndex()
    {
        return view('create');
    }

    public function historyIndex()
    {
        $values = Training::all();
        
        return view('history.index', compact('values'));
    }

    public function index(Request $request) {
        $date = $request->date;
        $query = Training::search($date);

        $values =  $query->select('event', 'weight', 'number', 'set')->paginate(20);

        return view('history.index', compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Training::create([
            'event' => $request->event,
            'weight' => $request->weight,
            'number' => $request->number,
            'set' => $request->set,
        ]);

        return to_route('history.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // $values = Training::whereDate('created_at', '=', $request->date)->get();
        $date = $request->date;
        $query = Training::search($date);

        $values =  $query->select('event', 'weight', 'number', 'set')->paginate(20);

        return view('history.index', compact('values'));
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
