<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Class GroupController
 * @package App\Http\Controllers
 */
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::paginate();
        // $volunteer = Volunteer::where("id", $groups->manager_id)->first();
        // $volunteer->refresh();
        return view('group.index', compact('groups'))
        // return view('group.index', ['groups' => $groups, 'manager' => $volunteer])
            ->with('i', (request()->input('page', 1) - 1) * $groups->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group = new Group();
        $grouptypes = DB::table('grouptypes')->pluck('name', 'id');
        return view('group.create', ['group' => $group, 'grouptypes' => $grouptypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Group::$rules);

        $group = Group::create($request->all());

        return redirect()->route('groups.index')
            ->with('success', 'Group created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Group::find($id);
        $volunteer = Volunteer::where("id", $group->manager_id)->first();
        $volunteer->refresh();
        return view('group.show', ['group' => $group, 'manager' => $volunteer]);
        // return view('group.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::find($id);
        $grouptypes = DB::table('grouptypes')->pluck('name', 'id');
        return view('group.edit', ['group' => $group, 'grouptypes' => $grouptypes]);
        //return view('group.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Group $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        request()->validate(Group::$rules);

        $group->update($request->all());

        return redirect()->route('groups.index')
            ->with('success', 'Group updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $group = Group::find($id)->delete();

        return redirect()->route('groups.index')
            ->with('success', 'Group deleted successfully');
    }
}
