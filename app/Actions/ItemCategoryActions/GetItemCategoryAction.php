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

class GetItemCategoryAction
{
    public static function execute($id){
        return ItemCategory::find($id);
    }
}
