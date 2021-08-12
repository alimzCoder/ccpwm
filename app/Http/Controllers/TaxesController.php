<?php

namespace App\Http\Controllers;

use App\Actions\TaxesActions\DestroyTax;
use App\Actions\TaxesActions\GetTax;
use App\Actions\TaxesActions\ListTaxes;
use App\Actions\TaxesActions\StoreTax;
use App\Actions\TaxesActions\UpdateTax;
use Illuminate\Http\Request;

class TaxesController extends Controller
{
    public function index(Request $request)
    {

        $inputs = $request->all();
        $records = ListTaxes::execute($inputs);
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

        $record = StoreTax::execute($inputs);
        if ($record) {
            return redirect(route('taxes.index'));
        } else {
            return redirect()->back()->with('error', 'Error in creating a new record');
        }
    }

    public function edit($id)
    {
        $record = GetTax::execute($id);
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
        $record = UpdateTax::execute($id, $inputs);

        if ($record) {

            return redirect()->back()->with('success', 'Record updated successfully');

        }
        return redirect()->back()->with('error', 'Error in updating a record');
    }

    public function destroy($id)
    {
        $record = DestroyTax::execute($id);
        if ($record) {
            return redirect()->back()->with('success', 'Record deleted');
        } else {
            return redirect()->back()->with('error', 'Error in deleting a record');
        }
    }
}
