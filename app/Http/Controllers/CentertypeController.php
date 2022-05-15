<?php

namespace App\Http\Controllers;

use App\Models\Centertype;
use Illuminate\Http\Request;

/**
 * Class CentertypeController
 * @package App\Http\Controllers
 */
class CentertypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centertypes = Centertype::paginate();

        return view('centertype.index', compact('centertypes'))
            ->with('i', (request()->input('page', 1) - 1) * $centertypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centertype = new Centertype();
        return view('centertype.create', compact('centertype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Centertype::$rules);

        $centertype = Centertype::create($request->all());

        return redirect()->route('centertypes.index')
            ->with('success', 'Centertype created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $centertype = Centertype::find($id);

        return view('centertype.show', compact('centertype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $centertype = Centertype::find($id);

        return view('centertype.edit', compact('centertype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Centertype $centertype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Centertype $centertype)
    {
        request()->validate(Centertype::$rules);

        $centertype->update($request->all());

        return redirect()->route('centertypes.index')
            ->with('success', 'Centertype updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $centertype = Centertype::find($id)->delete();

        return redirect()->route('centertypes.index')
            ->with('success', 'Centertype deleted successfully');
    }
}
