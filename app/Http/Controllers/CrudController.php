<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();

        return view('crud.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(Auth::user()->id_role != 1){ 
            abort(403);
        }

        $types = Type::all();

        return view('crud.create', compact('types') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Animal::create($request->all());

        return redirect()->route('crud.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animals = Animal::findOrFail($id);

        return view('crud.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->id_role != 1){ 
            abort(403);
        }
        
        $animal = Animal::findOrFail($id);
        $types = Type::all();

        return view('crud.edit', compact('animal', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::user()->id_role != 1){ 
            abort(403);
        }

        $animal = Animal::findOrFail($id);
        $animal->update($request->all());

        return redirect()->route('crud.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->id_role != 1){ 
            abort(403);
        }

        try {
            Animal::destroy($id);
        } catch (\Exception $e) {
            return redirect()->route('crud.index')->with('error', 'Nie można usunąć tych zwierząt.');
        }

        return redirect()->route('crud.index');
    }
}
