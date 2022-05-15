<?php

namespace App\Http\Controllers;

use App\Models\Grouptype;
use Illuminate\Http\Request;

/**
 * Class GrouptypeController
 * @package App\Http\Controllers
 */
class GrouptypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grouptypes = Grouptype::paginate();

        return view('grouptype.index', compact('grouptypes'))
            ->with('i', (request()->input('page', 1) - 1) * $grouptypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grouptype = new Grouptype();
        return view('grouptype.create', compact('grouptype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Grouptype::$rules);

        $grouptype = Grouptype::create($request->all());

        return redirect()->route('grouptypes.index')
            ->with('success', 'Grouptype created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grouptype = Grouptype::find($id);

        return view('grouptype.show', compact('grouptype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grouptype = Grouptype::find($id);

        return view('grouptype.edit', compact('grouptype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Grouptype $grouptype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grouptype $grouptype)
    {
        request()->validate(Grouptype::$rules);

        $grouptype->update($request->all());

        return redirect()->route('grouptypes.index')
            ->with('success', 'Grouptype updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $grouptype = Grouptype::find($id)->delete();

        return redirect()->route('grouptypes.index')
            ->with('success', 'Grouptype deleted successfully');
    }
}
