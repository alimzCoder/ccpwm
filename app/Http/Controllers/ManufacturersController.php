<?php

namespace App\Http\Controllers;

use App\Actions\ManufacturerAction\DestroyManAction;
use App\Actions\ManufacturerAction\GetManAction;
use App\Actions\ManufacturerAction\ListManAction;
use App\Actions\ManufacturerAction\StoreManAction;
use App\Actions\ManufacturerAction\UpdateManAction;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturersController extends Controller
{
    public function index(Request $request)
    {

        $inputs = $request->all();;
        $records = ListManAction::execute($inputs);
        return view('dashboard.manufacturers.index', compact('records'));
    }

    public function create(Request $request)
    {
        $inputs = $request->all();
        return view('dashboard.manufacturers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $inputs = $request->all();

        $record = StoreManAction::execute($inputs);
        if ($record) {
            return redirect(route('manufacturers.index'));
        } else {
            return redirect()->back()->with('error', 'Error in creating a new record');
        }
    }

    public function edit(Request $request, $id)
    {
        $inputs = $request->all();
        $record = GetManAction::execute($id);
        return view('dashboard.manufacturers.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $inputs = $request->all();
        $record = UpdateManAction::execute($id, $inputs);
        if ($record) {
            return redirect()->back()->with('success', 'Record updated successfully');
        }
        return redirect()->back()->with('error', 'Error in updating a record');
    }

    public function destroy($id)
    {
        $man = Manufacturer::find($id);
        if ($man->items()->exists()) {
            return redirect()->back()->with('error', 'Error in deleting a record');
        } else {
            $record = DestroyManAction::execute($id);
            return redirect()->back()->with('success', 'Record deleted');
        }
    }

}
