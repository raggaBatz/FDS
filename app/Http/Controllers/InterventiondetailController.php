<?php

namespace App\Http\Controllers;

use App\Models\Interventiondetail;
use Illuminate\Http\Request;

/**
 * Class InterventiondetailController
 * @package App\Http\Controllers
 */
class InterventiondetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interventiondetails = Interventiondetail::paginate();

        return view('interventiondetail.index', compact('interventiondetails'))
            ->with('i', (request()->input('page', 1) - 1) * $interventiondetails->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $interventiondetail = new Interventiondetail();
        return view('interventiondetail.create', compact('interventiondetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Interventiondetail::$rules);

        $interventiondetail = Interventiondetail::create($request->all());

        return redirect()->route('interventiondetails.index')
            ->with('success', 'Interventiondetail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $interventiondetail = Interventiondetail::find($id);

        return view('interventiondetail.show', compact('interventiondetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interventiondetail = Interventiondetail::find($id);

        return view('interventiondetail.edit', compact('interventiondetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Interventiondetail $interventiondetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interventiondetail $interventiondetail)
    {
        request()->validate(Interventiondetail::$rules);

        $interventiondetail->update($request->all());

        return redirect()->route('interventiondetails.index')
            ->with('success', 'Interventiondetail updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $interventiondetail = Interventiondetail::find($id)->delete();

        return redirect()->route('interventiondetails.index')
            ->with('success', 'Interventiondetail deleted successfully');
    }
}
