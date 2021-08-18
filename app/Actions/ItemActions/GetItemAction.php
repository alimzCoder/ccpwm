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

class GetItemAction
{
    public static function execute($id){
        return Item::find($id);
    }
}
