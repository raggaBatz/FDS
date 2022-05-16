<?php

namespace App\Http\Controllers;

use App\Models\Intervention;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class InterventionController
 * @package App\Http\Controllers
 */
class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interventions = Intervention::paginate();

        return view('intervention.index', compact('interventions'))
            ->with('i', (request()->input('page', 1) - 1) * $interventions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $intervention = new Intervention();
        $centers = DB::table('centers')->pluck('name', 'id');
        $groups = DB::table('groups')->pluck('name', 'id');
        // return view('intervention.create', compact('intervention'));
        return view('intervention.create', ['intervention' => $intervention, 'centers' => $centers, 'groups' => $groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Intervention::$rules);

        $intervention = Intervention::create($request->all());

        return redirect()->route('interventions.index')
            ->with('success', 'Intervention created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $intervention = Intervention::find($id);

        return view('intervention.show', compact('intervention'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $intervention = Intervention::find($id);
        $centers = DB::table('centers')->pluck('name', 'id');
        $groups = DB::table('groups')->pluck('name', 'id');
        return view('intervention.edit', ['intervention' => $intervention, 'centers' => $centers, 'groups' => $groups]);
        // return view('intervention.edit', compact('intervention'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Intervention $intervention
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intervention $intervention)
    {
        request()->validate(Intervention::$rules);

        $intervention->update($request->all());

        return redirect()->route('interventions.index')
            ->with('success', 'Intervention updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $intervention = Intervention::find($id)->delete();

        return redirect()->route('interventions.index')
            ->with('success', 'Intervention deleted successfully');
    }
}
