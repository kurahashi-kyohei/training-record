<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\Event;
use App\Http\Requests\TrainingRequest;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function CreateIndex()
    {
        $values = Event::all();

        return view('create', compact('values'));
    }

    public function index(Request $request)
    {
        $events = Event::all();
        $query = Training::query();

        $date = $request->date;
        $select = $request->event;

        $query->where('user_id', '=', auth()->id());
        if($date) {
            $query->whereDate('created_at', $date);
        }
        
        if($select) {
            $query->where('event', $select);
        }

        $values =  $query->select('event', 'weight', 'number', 'set', 'created_at')->paginate(10);;

        return view('history.index', compact('values', 'date', 'events', 'select'));
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
    public function store(TrainingRequest $request)
    {
        $id = auth()->id();

        Training::create([
            'user_id' => $id,
            'event' => $request->event,
            'weight' => $request->weight,
            'number' => $request->number,
            'set' => $request->set,
        ]);

        return to_route('create.index')->with('successMessage', '登録が完了しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        
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
