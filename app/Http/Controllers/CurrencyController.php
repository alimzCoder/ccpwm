<?php

namespace App\Http\Controllers;

use App\Actions\CurrencyActions\DestroyCurrency;
use App\Actions\CurrencyActions\GetCurrency;
use App\Actions\CurrencyActions\ListCurrencies;
use App\Actions\CurrencyActions\StoreCurrency;
use App\Actions\CurrencyActions\UpdateCurrency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {

        $inputs = $request->all();
        $records = ListCurrencies::execute($inputs);
        return view('currencies.index', compact('records'));
    }

    public function create()
    {
        return view('currencies.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'max:15|unique:currencies',
            'code' => 'max:3|unique:currencies',
        ]);

        $inputs = $request->all();

        $record = StoreCurrency::execute($inputs);
        if ($record) {
            return redirect(route('currencies.index'));
        } else {
            return redirect()->back()->with('error', 'Error in creating a new record');
        }
    }

    public function edit($id)
    {
        $record = GetCurrency::execute($id);
        return view('currencies.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'max:15|unique:currencies',
            'code' => 'max:3|unique:currencies',
        ]);

        $inputs = $request->all();
        $record = UpdateCurrency::execute($id, $inputs);

        if ($record) {

            return redirect()->back()->with('success', 'Record updated successfully');

        }
        return redirect()->back()->with('error', 'Error in updating a record');
    }

    public function destroy($id)
    {
        $record = DestroyCurrency::execute($id);
        if ($record) {
            return redirect()->back()->with('success', 'Record deleted');
        } else {
            return redirect()->back()->with('error', 'Error in deleting a record');
        }
    }
}
