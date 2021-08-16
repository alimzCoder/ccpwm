<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٢/٠٨/٢٠٢١
 * Time: ١١:٣٠ ص
 */

namespace App\Actions\WarehouseActions;


use App\Models\Warehouse;

class UpdateWarehouseAction
{
    public static function execute($id,$inputs = []){
        $record = Warehouse::find($id);
        return $record->update($inputs);
    }
}
