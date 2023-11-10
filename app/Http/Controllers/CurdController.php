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
    public function sortByDate($direction)
    {
        $notes = dmt_curd::orderBy('created_at', $direction)->get();
        return view('index', compact('notes'));
    }

    public function sortByDateAsc()
    {
        return $this->sortByDate('asc');
    }

    public function sortByDateDesc()
    {
        return $this->sortByDate('desc');
    }
}
