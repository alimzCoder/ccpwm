<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٨/٠٨/٢٠٢١
 * Time: ١٢:٠٤ م
 */

namespace App\Actions\ItemActions;


use App\Models\Item;

class StoreItemAction
{
    public static function execute($inputs){
        // some conditions and rules can be added
        return Item::create($inputs);
    }
}
