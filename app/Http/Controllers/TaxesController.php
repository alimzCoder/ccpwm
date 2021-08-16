<?php

namespace App\Http\Controllers;

use App\Actions\TaxesActions\DestroyTaxAction;
use App\Actions\TaxesActions\GetTaxAction;
use App\Actions\TaxesActions\ListTaxesAction;
use App\Actions\TaxesActions\StoreTaxAction;
use App\Actions\TaxesActions\UpdateTaxAction;
use Illuminate\Http\Request;

class TaxesController extends Controller
{
    public function index(Request $request)
    {

        $inputs = $request->all();
        $records = ListTaxesAction::execute($inputs);
        return view('dashboard.taxes.index', compact('records'));
    }

    public function create()
    {
        return view('dashboard.taxes.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'index' => 'max:20|required',
            'amount' => 'required',
        ]);

        $inputs = $request->all();

         if(!empty($inputs['is_active'])) {
             $inputs['is_active'] = '1';
         }

        $record = StoreTaxAction::execute($inputs);
        if ($record) {
            return redirect(route('taxes.index'));
        } else {
            return redirect()->back()->with('error', 'Error in creating a new record');
        }
    }

    public function edit($id)
    {
        $record = GetTaxAction::execute($id);
        return view('dashboard.taxes.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'index' => 'max:20|required',
            'amount' => 'required',
        ]);

        $inputs = $request->all();
        if(!empty($inputs['is_active'])) {
            $inputs['is_active'] = '1';
        }else{
            $inputs['is_active'] = '0';
        }
        $record = UpdateTaxAction::execute($id, $inputs);

        if ($record) {

            return redirect()->back()->with('success', 'Record updated successfully');

        }
        return redirect()->back()->with('error', 'Error in updating a record');
    }

    public function destroy($id)
    {
        $record = DestroyTaxAction::execute($id);
        if ($record) {
            return redirect()->back()->with('success', 'Record deleted');
        } else {
            return redirect()->back()->with('error', 'Error in deleting a record');
        }
    }
}
