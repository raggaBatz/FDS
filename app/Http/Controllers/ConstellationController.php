<?php

namespace App\Http\Controllers;

use App\Models\Constellation;
use Illuminate\Http\Request;

/**
 * Class ConstellationController
 * @package App\Http\Controllers
 */
class ConstellationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $constellations = Constellation::paginate();

        return view('constellation.index', compact('constellations'))
            ->with('i', (request()->input('page', 1) - 1) * $constellations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $constellation = new Constellation();
        return view('constellation.create', compact('constellation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Constellation::$rules);

        $constellation = Constellation::create($request->all());

        return redirect()->route('constellations.index')
            ->with('success', 'Constellation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $constellation = Constellation::find($id);

        return view('constellation.show', compact('constellation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $constellation = Constellation::find($id);

        return view('constellation.edit', compact('constellation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Constellation $constellation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Constellation $constellation)
    {
        request()->validate(Constellation::$rules);

        $constellation->update($request->all());

        return redirect()->route('constellations.index')
            ->with('success', 'Constellation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $constellation = Constellation::find($id)->delete();

        return redirect()->route('constellations.index')
            ->with('success', 'Constellation deleted successfully');
    }
}
