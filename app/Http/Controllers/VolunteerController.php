<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Class VolunteerController
 * @package App\Http\Controllers
 */
class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = Volunteer::paginate();

        return view('volunteer.index', compact('volunteers'))
            ->with('i', (request()->input('page', 1) - 1) * $volunteers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $volunteer = new Volunteer();
        $generations = DB::table('generations')->pluck('name', 'id');
        $constellations = DB::table('constellations')->pluck('name', 'id');
        $groups = DB::table('groups')->pluck('name', 'id');
        return view('volunteer.create', ['volunteer' => $volunteer,'generations' => $generations,'constellations' => $constellations,'groups' => $groups]);
        // return view('volunteer.create', compact('volunteer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Volunteer::$rules);

        if ($request->status == 'on') {
            $request->merge([
                'status' => true,
            ]);
        }else{
            $request->merge([
                'status' => false,
            ]);
        }

        $volunteer = Volunteer::create($request->all());

        return redirect()->route('volunteers.index')
            ->with('success', 'Volunteer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $volunteer = Volunteer::find($id);

        return view('volunteer.show', compact('volunteer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = Volunteer::find($id);
        $generations = DB::table('generations')->pluck('name', 'id');
        $constellations = DB::table('constellations')->pluck('name', 'id');
        $groups = DB::table('groups')->pluck('name', 'id');
        return view('volunteer.edit', ['volunteer' => $volunteer,'generations' => $generations,'constellations' => $constellations,'groups' => $groups]);
        // return view('volunteer.edit', compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Volunteer $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        request()->validate(Volunteer::$rules);

        $volunteer->update($request->all());

        return redirect()->route('volunteers.index')
            ->with('success', 'Volunteer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $volunteer = Volunteer::find($id)->delete();

        return redirect()->route('volunteers.index')
            ->with('success', 'Volunteer deleted successfully');
    }
}
