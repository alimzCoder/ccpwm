<?php

namespace App\Http\Controllers;

use App\Actions\WarehouseActions\DestroyWarehouseAction;
use App\Actions\WarehouseActions\GetWarehouseAction;
use App\Actions\WarehouseActions\ListWarehousesAction;
use App\Actions\WarehouseActions\StoreWarehouseAction;
use App\Actions\WarehouseActions\UpdateWarehouseAction;
use Illuminate\Http\Request;

class WarehousesController extends Controller
{
    public function index(Request $request)
    {
        $inputs = $request->all();
        $records = ListWarehousesAction::execute($inputs);
        return view('dashboard.warehouses.index', compact('records'));
    }


    public function create()
    {
        return view('dashboard.warehouses.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        $inputs = $request->all();

        $record = StoreWarehouseAction::execute($inputs);
        if ($record) {
            return redirect(route('warehouses.index'));
        } else {
            return redirect()->back()->with('error', 'Error in creating a new record');
        }
    }

    public function edit($id)
    {
        $record = GetWarehouseAction::execute($id);
        return view('dashboard.warehouses.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);


        $inputs = $request->all();
        $record = UpdateWarehouseAction::execute($id, $inputs);

        if ($record) {

            return redirect()->back()->with('success', 'Record updated successfully');

        }
        return redirect()->back()->with('error', 'Error in updating a record');
    }

    public function destroy($id)
    {
        $record = DestroyWarehouseAction::execute($id);
        if ($record) {
            return redirect()->back()->with('success', 'Record deleted');
        } else {
            return redirect()->back()->with('error', 'Error in deleting a record');
        }
    }
}
