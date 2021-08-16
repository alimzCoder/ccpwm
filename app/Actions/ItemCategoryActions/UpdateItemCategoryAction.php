<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٦/٠٨/٢٠٢١
 * Time: ١٠:٤٩ ص
 */

namespace App\Actions\ItemCategoryActions;


use App\Models\ItemCategory;

class UpdateItemCategoryAction
{
    public static function execute($id,$inputs = []){
        $record = ItemCategory::find($id);
        return $record->update($inputs);
    }
}
