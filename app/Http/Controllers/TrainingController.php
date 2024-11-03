<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Http\Requests\TrainingRequest;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function CreateIndex()
    {
        return view('create');
    }

    public function index()
    {
        $query = Training::Search();

        $values =  $query->select('event', 'weight', 'number', 'set', 'created_at', 'id')->paginate(20);
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
        $date = $request->date;
        $query = Training::DateSearch($date);

        $values =  $query->select('event', 'weight', 'number', 'set', 'created_at', 'id')->paginate(20);

        return view('history.date', compact('values', 'date'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $value = Training::find($id);

        return view('history.edit', compact('value'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TrainingRequest $request, string $id)
    {
        $value = Training::find($id);

        $date = $value->date;

        $value->event = $request->event;
        $value->weight = $request->weight;
        $value->number = $request->number;
        $value->set = $request->set;
        $value->save();

        $successMessage = '更新が完了しました';

        return view('history.edit', compact('value'))->with('successMessage', '登録が完了しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $value = Training::find($id);
        $value->delete();

        $date = $value->date;

        $query = Training::DateSearch($date);
        $values =  $query->select('event', 'weight', 'number', 'set', 'created_at', 'id')->paginate(20);

        return view('history.date', compact('values', 'date'));
    }
}
