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

class UpdateItemAction
{
    public static function execute($id,$inputs = []){
        $record = Item::find($id);
        return $record->update($inputs);
    }
}
