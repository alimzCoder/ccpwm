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

class ListItemsCategoryAction
{
    public static function execute($inputs = [])
    {
        $records = new ItemCategory();
        if (!empty($inputs['search'])) {
            $records = $records->where('name', 'LIKE', '%' . $inputs['search'] . '%');
        }
        $records = $records->orderBy('id','DESC');

        return $records->get();
    }
}
