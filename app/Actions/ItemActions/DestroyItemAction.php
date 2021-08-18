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

class DestroyItemAction
{
    public static function execute($id){
        $record = Item::find($id);
        return $record->delete($id);
    }
}
