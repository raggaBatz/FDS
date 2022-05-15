<?php

namespace App\Http\Controllers;

use App\Models\Generation;
use Illuminate\Http\Request;

/**
 * Class GenerationController
 * @package App\Http\Controllers
 */
class GenerationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generations = Generation::paginate();

        return view('generation.index', compact('generations'))
            ->with('i', (request()->input('page', 1) - 1) * $generations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generation = new Generation();
        return view('generation.create', compact('generation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Generation::$rules);

        $generation = Generation::create($request->all());

        return redirect()->route('generations.index')
            ->with('success', 'Generation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $generation = Generation::find($id);

        return view('generation.show', compact('generation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generation = Generation::find($id);

        return view('generation.edit', compact('generation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Generation $generation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generation $generation)
    {
        request()->validate(Generation::$rules);

        $generation->update($request->all());

        return redirect()->route('generations.index')
            ->with('success', 'Generation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $generation = Generation::find($id)->delete();

        return redirect()->route('generations.index')
            ->with('success', 'Generation deleted successfully');
    }
}
