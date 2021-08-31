<?php

namespace App\Http\Controllers;

use App\Actions\ItemActions\GetItemAction;
use App\Actions\ItemActions\ListItemsAction;
use App\Actions\WarehouseActions\DestroyWarehouseAction;
use App\Actions\WarehouseActions\GetWarehouseAction;
use App\Actions\WarehouseActions\ListWarehousesAction;
use App\Actions\WarehouseActions\StoreWarehouseAction;
use App\Actions\WarehouseActions\UpdateWarehouseAction;
use Illuminate\Http\Request;

class WarehousesController extends Controller
{
    public function show(Request $request, $id)
    {
        $inputs = $request->all();
        $record = GetWarehouseAction::execute($id);
        return view('dashboard.warehouses.show', compact('record'));
    }

    public function index(Request $request)
    {
        $inputs = $request->all();
        $records = ListWarehousesAction::execute($inputs);
        return view('dashboard.warehouses.index', compact('records'));
    }


    public function create(Request $request)
    {
        $inputs = $request->all();
        $items = ListItemsAction::execute($inputs);
        return view('dashboard.warehouses.create', compact('items'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        $inputs = $request->all();
        $record = StoreWarehouseAction::execute($inputs);
        if (!empty($inputs['items'])) {
            $record->items()->sync($inputs['items']);
        }
        if ($record) {
            return redirect(route('warehouses.index'));
        } else {
            return redirect()->back()->with('error', 'Error in creating a new record');
        }
    }

    public function edit(Request $request, $id)
    {
        $inputs = $request->all();
        $record = GetWarehouseAction::execute($id);
        $items = ListItemsAction::execute($inputs);
        return view('dashboard.warehouses.edit', compact('record', 'items'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);


        $inputs = $request->all();
        $warehouse = GetWarehouseAction::execute($id);
        if (!empty($inputs['items'])) {
                $warehouse->items()->sync($inputs['items']);
        }
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
