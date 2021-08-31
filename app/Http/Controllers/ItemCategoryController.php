<?php

namespace App\Http\Controllers;

use App\Actions\ItemCategoryActions\DestroyItemCategoryAction;
use App\Actions\ItemCategoryActions\GetItemCategoryAction;
use App\Actions\ItemCategoryActions\ListItemsCategoryAction;
use App\Actions\ItemCategoryActions\StoreItemCategoryAction;
use App\Actions\ItemCategoryActions\UpdateItemCategoryAction;
use App\Actions\StatusActions\ListStatusesAction;
use Illuminate\Http\Request;

class ItemCategoryController extends Controller
{

    public function index(Request $request)
    {

        $inputs = $request->all();
        $records = ListItemsCategoryAction::execute($inputs);
        return view('dashboard.itemsCategory.index', compact('records'));
    }


    public function create(Request $request)
    {
        $inputs = $request->all();
        $statuses = ListStatusesAction::execute($inputs);
        $categories = ListItemsCategoryAction::execute($inputs);
        return view('dashboard.itemsCategory.create',compact('categories','statuses'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $inputs = $request->all();

        $record = StoreItemCategoryAction::execute($inputs);
        if ($record) {
            return redirect(route('items_category.index'));
        } else {
            return redirect()->back()->with('error', 'Error in creating a new record');
        }
    }

    public function edit(Request $request,$id)
    {
        $inputs = $request->all();
        $record = GetItemCategoryAction::execute($id);
        $categories = ListItemsCategoryAction::execute($inputs);
        $statuses = ListStatusesAction::execute($inputs);
        return view('dashboard.itemsCategory.edit', compact('record','categories','statuses'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
        ]);


        $inputs = $request->all();
        $record = UpdateItemCategoryAction::execute($id, $inputs);

        if ($record) {
            return redirect()->back()->with('success', 'Record updated successfully');
        }
        return redirect()->back()->with('error', 'Error in updating a record');
    }

    public function destroy($id)
    {
        $record = DestroyItemCategoryAction::execute($id);

        if ($record) {
            return redirect()->back()->with('success', 'Record deleted');
        } else {
            return redirect()->back()->with('error', 'Error in deleting a record');
        }
    }

}
