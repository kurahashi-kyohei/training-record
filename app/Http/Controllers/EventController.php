<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    public function index()
    {
        return view('addEvent');
    }

    public function store(EventRequest $request)
    {
        $id = auth()->id();

        Event::create([
            'user_id' => $id,
            'name' => $request->name,
        ]);

        return to_route('event.index')->with('successMessage', '追加が完了しました');
    }
}
