<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PersonController extends Controller
{
    public function index()
    {
        $people =  Person::all();

        return view('person.index', compact('people'));
    }

    public function create()
    {
        $person = new Person();
        return view('person.create', compact('person'));
    }

    public function store(PersonRequest $request): RedirectResponse{
        $data = $request->except('_token');
        Person::create($data);
        return redirect()->route('person.index');
    }

    public function edit(Person $person): View{
       // $person = Person::find($id);
        return view('person.edit', compact('person'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PersonRequest  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PersonRequest $request, Person $person): RedirectResponse
    {
        $data = $request->except('_token'); // Exclude the CSRF token from the request data
        $person->update($data); // Update the person with the new data
        return redirect()->route('person.index'); // Redirect to the person index page after updating
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Person $person): RedirectResponse{
        $person->delete();
        return redirect()->route('person.index');
    }
}
