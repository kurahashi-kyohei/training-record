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

    public function index()
    {
        $events = Event::all();
        $query = Training::Search();

        $values =  $query->select('event', 'weight', 'number', 'set', 'created_at')->paginate(20);
        return view('history.index', compact('values', 'events'));
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
    public function date(Request $request)
    {
        // $values = Training::whereDate('created_at', '=', $request->date)->get();
        $date = $request->date;
        $query = Training::DateSearch($date);

        $values =  $query->select('event', 'weight', 'number', 'set', 'created_at')->paginate(20);

        return view('history.date', compact('values', 'date'));
    }

    public function event(Request $request)
    {
        // $values = Training::whereDate('created_at', '=', $request->date)->get();
        $select = $request->event;
        $events = Event::all();
        $query = Training::EventSearch($select);

        $values =  $query->select('event', 'weight', 'number', 'set', 'created_at')->paginate(20);

        return view('history.event', compact('values', 'select', 'events'));
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
