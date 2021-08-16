<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٦/٠٨/٢٠٢١
 * Time: ١٠:٤٨ ص
 */

namespace App\Actions\ItemCategoryActions;


use App\Models\ItemCategory;

class DestroyItemCategoryAction
{
    public static function execute($id){
        $record = ItemCategory::find($id);
        return $record->delete($id);
    }
}
