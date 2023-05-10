<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;
use App\Http\Requests\Person\UpdateRequest;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return $people;
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $person = Person::create($data);
        return $person;
    }

    public function show(Person $person)
    {
        return $person;
    }

    public function edit(Person $person)
    {
        return $person;
    }

    public function update(UpdateRequest $request, Person $person)
    {
        $data = $request->validated();
        $person->update($data);
    }

    public function delete(Person $person)
    {
        $person->delete();
    }
}
