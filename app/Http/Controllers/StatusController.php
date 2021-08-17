<?php

namespace App\Http\Controllers;

use App\Actions\StatusActions\DestroyStatusAction;
use App\Actions\StatusActions\ListStatusesAction;
use App\Actions\StatusActions\StoreStatusAction;
use App\Actions\StatusActions\UpdateStatusAction;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(Request $request)
    {

        $inputs = $request->all();
        $records = ListStatusesAction::execute($inputs);
        return view('dashboard.statuses.index', compact('records'));
    }


    public function create()
    {
        return view('dashboard.statuses.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'value' => 'required',
            'model' => 'required',
            'text_color' => 'required',
            'bg_color' => 'required',
        ]);

        $inputs = $request->all();

        $record = StoreStatusAction::execute($inputs);
        if ($record) {
            return redirect(route('statuses.index'));
        } else {
            return redirect()->back()->with('error', 'Error in creating a new record');
        }
    }


    public function edit($id)
    {
        return view('dashboard.statuses.edit');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'value' => 'required',
            'model' => 'required',
            'text_color' => 'required',
            'bg_color' => 'required',
        ]);


        $inputs = $request->all();
        $record = UpdateStatusAction::execute($id, $inputs);

        if ($record) {
            return redirect()->back()->with('success', 'Record updated successfully');
        }
        return redirect()->back()->with('error', 'Error in updating a record');
    }

    public function destroy($id)
    {
        $record = DestroyStatusAction::execute($id);
        if ($record) {
            return redirect()->back()->with('success', 'Record deleted');
        } else {
            return redirect()->back()->with('error', 'Error in deleting a record');
        }
    }
}
