<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٢/٠٨/٢٠٢١
 * Time: ١١:٢٠ ص
 */

namespace App\Actions\WarehouseActions;


use App\Models\Warehouse;

class DestroyWarehouseAction
{
    public static function execute($id){
        $record = Warehouse::find($id);
        return $record->delete($id);
    }
}
