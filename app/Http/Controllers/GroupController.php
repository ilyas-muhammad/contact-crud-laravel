<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    public function index() {
        $groups = Group::paginate(5);
        
        return view('group/index', ['groups' => $groups]);
    }

    public function create() {
        return view('group/create-group');
    }

    public function store(Request $request) {
        $this->validate($request, ['name' => 'required']);

        Group::create([
            'name' => $request->name,
        ]);

        return redirect('/group');
    }

    public function update($id) {
        $group = Group::find($id);

        return view('/group/update-group', ['group' => $group]);
    }


    public function put($id, Request $request) {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $group = Group::find($id);

        $group->name = $request->name;
        $group->save();

        return redirect('/group');
    }

    public function delete($id) {
        $group = Group::find($id);
        $group->delete();

        return redirect('/group');
    }
}
