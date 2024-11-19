<?php

namespace App\Http\Controllers;

use App\Models\Prepodavatel;
use Illuminate\Http\Request;

class PrepodavatelController extends Controller
{
    public function index()
    {
        $prepodavateli = Prepodavatel::all();
        return view('prepodavateli.index', compact('prepodavateli'));
    }

    public function create()
    {
        return view('prepodavateli.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'patronymic' => 'required',
            'subject' => 'required',
            'group' => 'required',
            'age' => 'required|integer',
            'phone' => 'required',
        ]);

        Prepodavatel::create($request->all());

        return redirect()->route('prepodavateli.index')->with('success', 'Преподаватель успешно добавлен');
    }

    public function edit($id)
    {
        $prepodavatel = Prepodavatel::findOrFail($id);
        return view('prepodavateli.edit', compact('prepodavatel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'patronymic' => 'required',
            'subject' => 'required',
            'group' => 'required',
            'age' => 'required|integer',
            'phone' => 'required',
        ]);

        $prepodavatel = Prepodavatel::findOrFail($id);
        $prepodavatel->update($request->all());

        return redirect()->route('prepodavateli.index')->with('success', 'Преподаватель успешно обновлен');
    }

    public function destroy($id)
    {
        $prepodavatel = Prepodavatel::findOrFail($id);
        $prepodavatel->delete();

        return redirect()->route('prepodavateli.index')->with('success', 'Преподаватель успешно удален');
    }
}