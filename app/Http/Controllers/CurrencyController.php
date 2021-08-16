<?php

namespace App\Http\Controllers;

use App\Actions\CurrencyActions\DestroyCurrencyAction;
use App\Actions\CurrencyActions\GetCurrencyAction;
use App\Actions\CurrencyActions\ListCurrenciesAction;
use App\Actions\CurrencyActions\StoreCurrencyAction;
use App\Actions\CurrencyActions\UpdateCurrencyAction;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {

        $inputs = $request->all();
        $records = ListCurrenciesAction::execute($inputs);
        return view('dashboard.currencies.index', compact('records'));
    }

    public function create()
    {
        return view('dashboard.currencies.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'max:15|required',
            'code' => 'max:3|required',
            'exchange_rate' => 'required',
        ]);

        $inputs = $request->all();

        $record = StoreCurrencyAction::execute($inputs);
        if ($record) {
            return redirect(route('currencies.index'));
        } else {
            return redirect()->back()->with('error', 'Error in creating a new record');
        }
    }

    public function edit($id)
    {
        $record = GetCurrencyAction::execute($id);
        return view('dashboard.currencies.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'max:15|required',
            'code' => 'max:3|required',
            'exchange_rate' => 'required',
        ]);


        $inputs = $request->all();
        $record = UpdateCurrencyAction::execute($id, $inputs);

        if ($record) {

            return redirect()->back()->with('success', 'Record updated successfully');

        }
        return redirect()->back()->with('error', 'Error in updating a record');
    }

    public function destroy($id)
    {
        $record = DestroyCurrencyAction::execute($id);
        if ($record) {
            return redirect()->back()->with('success', 'Record deleted');
        } else {
            return redirect()->back()->with('error', 'Error in deleting a record');
        }
    }
}
