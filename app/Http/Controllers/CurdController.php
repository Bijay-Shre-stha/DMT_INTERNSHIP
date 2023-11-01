<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dmt_curd;

class CurdController extends Controller
{
    public function index()
    {
        $notes = dmt_curd::all();
        return view('index', ['notes' => $notes]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        // dd($request); dump and die
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tag' => 'required'
        ]);
        $newNote = dmt_curd::create($data);
        return redirect(route('index'))->with('success', 'Note Created successfully');
    }
    public function edit($id)
    {
        $note = dmt_curd::find($id);
        return view('edit', [
            'note' => $note
        ]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tag' => 'required'
        ]);
        $note = dmt_curd::find($id);
        $note->update($data);
        return redirect(route('index'))->with('success', 'Note Updated successfully');
    }
    public function delete($id)
    {
        $note = dmt_curd::find($id);
        $note->delete();
        return redirect(route('index'))->with('success', 'Note Deleted successfully');
    }
    public function sortByDateAsc()
    {
        $notes = dmt_curd::orderBy('created_at', 'asc')->get();
        return view('index', ['notes' => $notes]);
    }
    public function sortByDateDesc()
    {
        $notes = dmt_curd::orderBy('created_at', 'desc')->get();
        return view('index', ['notes' => $notes]);
    }
}
