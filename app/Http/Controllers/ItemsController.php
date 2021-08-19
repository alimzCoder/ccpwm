<?php

namespace App\Http\Controllers;

use App\Actions\ItemActions\DestroyItemAction;
use App\Actions\ItemActions\GetItemAction;
use App\Actions\ItemActions\ListItemsAction;
use App\Actions\ItemActions\StoreItemAction;
use App\Actions\ItemActions\UpdateItemAction;
use App\Actions\ItemCategoryActions\GetItemCategoryAction;
use App\Actions\ItemCategoryActions\ListItemsCategoryAction;
use App\Actions\ManufacturerAction\ListManAction;
use App\Actions\StatusActions\ListStatusesAction;
use App\Actions\UtilsActions\DeleteMediaAction;
use App\Actions\UtilsActions\StoreMediaAction;
use App\Exports\ItemsExport;
use App\Models\Item;
use App\Models\ItemCategory;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Writer\Exception;

class ItemsController extends Controller
{
    public function index(Request $request)
    {

        $inputs = $request->all();;
        $records = ListItemsAction::execute($inputs);
        return view('dashboard.items.index', compact('records'));
    }

    public function create(Request $request)
    {
        $inputs = $request->all();
        $statuses = ListStatusesAction::execute($inputs);
        $manufacturers = ListManAction::execute($inputs);
        $categories = ListItemsCategoryAction::execute($inputs);
        return view('dashboard.items.create', compact('categories', 'statuses','manufacturers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image_url' => 'required',
            'status_id' => 'required',
            'manufacturer_id' => 'required',
        ]);

        $inputs = $request->all();
        if (!empty($request->file('image_url'))) {
            $inputs['image_url'] = StoreMediaAction::execute($request->file('image_url'), 'items_image',
                'public');
        }

        $record = StoreItemAction::execute($inputs);

        $record->categories()->sync($inputs['categories']);
        if ($record) {
            return redirect(route('items.index'));
        } else {
            return redirect()->back()->with('error', 'Error in creating a new record');
        }

    }

    public function edit(Request $request, $id)
    {
        $inputs = $request->all();
        $record = GetItemAction::execute($id);
        $categories = ListItemsCategoryAction::execute($inputs);
        $statuses = ListStatusesAction::execute($inputs);
        $manufacturers = ListManAction::execute($inputs);
        return view('dashboard.items.edit', compact('record', 'categories', 'statuses','manufacturers'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'status_id' => 'required',
            'manufacturer_id' => 'required',
        ]);


        $inputs = $request->all();
        if (!empty($request->file('image_url'))) {
            $inputs['image_url'] = StoreMediaAction::execute($request->file('image_url'), 'items_image',
                'public');
        }
        if ($request->has('image_url')) {
            $imageToBeDeleted = DeleteMediaAction::execute($id);
        }
        $item = GetItemAction::execute($id);
        $item->categories()->sync($inputs['categories']);
        $record = UpdateItemAction::execute($id, $inputs);
        if ($record) {
            return redirect()->back()->with('success', 'Record updated successfully');
        }
        return redirect()->back()->with('error', 'Error in updating a record');
    }


    public function destroy($id)
    {
        $imageToBeDeleted = DeleteMediaAction::execute($id);
        $record = DestroyItemAction::execute($id);
        if ($record) {
            return redirect()->back()->with('success', 'Record deleted');
        } else {
            return redirect()->back()->with('error', 'Error in deleting a record');
        }
    }

    public function export(){
        return Excel::download(new ItemsExport, 'items.xlsx');

    }


}
