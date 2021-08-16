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

class StoreItemCategoryAction
{
    public static function execute($inputs){
        // some conditions and rules can be added
        return ItemCategory::create($inputs);
    }
}
