<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٨/٠٨/٢٠٢١
 * Time: ١٢:٠٣ م
 */

namespace App\Actions\ItemActions;


use App\Models\Item;

class ListItemsAction
{
    public static function execute($inputs = [])
    {
        $records = new Item();
        if (!empty($inputs['search'])) {
            $records = $records->where('name', 'LIKE', '%' . $inputs['search'] . '%');
        }
        $records = $records->orderBy('id','DESC');

        return $records->get();
    }
}
