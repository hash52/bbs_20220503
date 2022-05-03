<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use Auth;

class ThreadController extends Controller
{
    public function index()
    {
        return view('threads.index', ['threads'=> Thread::all()]);
    }
    
    public function add()
    {
        return view('threads.new');
    }
    
    public function create(Request $request)
    {
        $thread = new Thread;
        $thread->fill($request->all());
        $thread->user_id = Auth::id();
        $thread->save();
        return redirect()->back();
    }
    
    public function show(Request $request)
    {
        return view('threads.show', ['thread' => Thread::find($request->thread_id)]);
    }
}
