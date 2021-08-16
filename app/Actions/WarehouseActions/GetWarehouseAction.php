<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٢/٠٨/٢٠٢١
 * Time: ١١:٢٩ ص
 */

namespace App\Actions\WarehouseActions;


use App\Models\Warehouse;

class GetWarehouseAction
{
    public static function execute($id){
        return Warehouse::find($id);
    }
}
